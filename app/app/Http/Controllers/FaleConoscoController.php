<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers;
use Validator;
use Mail;
use Session;
use Exception;

class FaleConoscoController extends Controller {

	public function index()
	{
		return view('frontend.fale-conosco.index');
	}

	public function enviar(Request $request)
	{
		$input = $request->all();
		$input['nome_completo'] = Helpers::removeUrls($input['nome_completo']);
		$input['telefone'] = Helpers::removeUrls($input['telefone']);
		$input['estado'] = Helpers::removeUrls($input['estado']);
		$input['endereco'] = Helpers::removeUrls($input['endereco']);
		$input['bairro'] = Helpers::removeUrls($input['bairro']);
		$input['cidade'] = Helpers::removeUrls($input['cidade']);
		$input['mensagem'] = Helpers::removeUrls($input['mensagem']);

		if ($input['endereco'] == $input['bairro']) {
			return back()->withErrors(['Desculpe, você não pode repetir os campos endereço e bairro.']);
		}
		if ($input['endereco'] == $input['cidade']) {
			return back()->withErrors(['Desculpe, você não pode repetir os campos endereço e cidade.']);
		}

		$messages = [
			'nome_completo.required' => 'Por favor, preencha o seu nome completo.', 
			'email.required' => 'Por favor, digite um e-mail', 
			'email.email' => 'O e-mail que você digitou não é válido', 
			'departamento.required' => 'Por favor, selecione um departamento', 
		];

		$validator = Validator::make($input, [
			'nome_completo' => 'required', 
			'email' => 'required|email', 
			'departamento' => 'required', 
		], $messages);

		if($validator->fails()):
			return redirect()->back()->withErrors($validator->messages());
		endif;
		if ( ! Helpers::validatePhone($input['telefone'])) {
			return redirect()->back()->withErrors(['Por favor, verifique o telefone. Utilize o formato (xx)xxxx-xxxx para telefones/celulares e (xx)xxxxx-xxxx para celulares com o dígito adicional.']);
		}

		$recaptcha = new \ReCaptcha\ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET'));
		$response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());
		if ( ! $response->isSuccess()) {
        	return back()->withErrors(['captcha' => 'Por favor, confirme que você não é um robô.'])->withInput();
		}

		try {
			Mail::send('frontend.emails.fale-conosco', ['input' => $input], function($message) use ($input) {
				
				if ($input['departamento'] == 'Comercial') {
					$message->to('vendas@sulplast.com.br');
				} elseif($input['departamento'] == 'Recursos Humanos') {
					$message->to('rh.eraldo@sulplast.com.br');
				} elseif ($input['departamento'] == 'Coordenadoria da Qualidade e Meio Ambiente') {
					$message->to('cinthia.prado@sulplast.com.br');
				} else {
					$message->to('sulplast@sulplast.com.br');
				}


				if ( ! empty(env('MAIL_TO_BCC'))) {
					$message->bcc(explode(';', env('MAIL_TO_BCC')));
				}

				$message->subject('[sulplast.com.br] - Novo contato disponível');
			});
		} catch (Exception $e) {
			return back()->withErrors(['Desculpe, mas houve um erro no serviço de envio de e-mails. Tente novamente mais tarde. Erro: ' . $e->getMessage()]);
		}

		$message = app()->getLocale() == 'pt_BR' ? 'Mensagem enviada com sucesso! A Sulplast agradece o seu contato.' : 'Message sent!';
		Session::flash('app_message', $message);
		return redirect()->back();
	}

	public function localizacao()
	{
		return view('frontend.fale-conosco.localizacao');
	}

	public function emails()
	{
		return view('frontend.fale-conosco.emails');
	}
}
