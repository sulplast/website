<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers;
use Validator;
use Mail;
use Session;
use Exception;

class TrabalheConoscoController extends Controller {

	public function index(Request $request)
	{
		if($request->isMethod('post')):
			$input = $request->all();

			$input['nome_completo'] = Helpers::removeUrls($input['nome_completo']);
			$input['telefone'] = Helpers::removeUrls($input['telefone']);
			$input['cidade'] = Helpers::removeUrls($input['cidade']);
			$input['estado'] = Helpers::removeUrls($input['estado']);
			$input['mensagem'] = Helpers::removeUrls($input['mensagem']);

			$messages = [
				'nome_completo.required' => 'Por favor, preencha o seu nome completo.', 
				'arquivo.mimes' => 'O curriculum que você está tentando enviar não obedece os formatos válidos. Certifique-se que o seu arquivo está salvo com a extensão .doc, .docx ou .pdf.', 
				'arquivo.required' => 'O campo arquivo é obrigatório', 
				'telefone.required' => 'O campo telefone é obrigatório', 
				'cidade.required' => 'O campo cidade é obrigatório', 
				'estado.required' => 'O campo estado é obrigatório', 
				'email.required' => 'Por favor, digite um e-mail', 
				'email.email' => 'O e-mail que você digitou não é válido', 
			];

			$validator = Validator::make($input, [
				'nome_completo' => 'required', 
				'email' => 'required|email', 
				'arquivo' => 'required|mimes:doc,pdf,docx', 
				'telefone' => 'required', 
				'cidade' => 'required', 
				'estado' => 'required'
			], $messages);

			if($validator->fails()):
				return back()->withErrors($validator->messages());
			endif;
			
			if ( ! Helpers::validatePhone($input['telefone'])) {
				return redirect()->back()->withErrors(['Por favor, verifique o telefone. Utilize o formato (xx)xxxx-xxxx para telefones/celulares e (xx)xxxxx-xxxx para celulares com o dígito adicional.'])->withInputs();
			}

			$pathInfo = pathinfo($input['arquivo']->getClientOriginalName());

			if ( ! isset($pathInfo['extension'])) { return back()->withErrors(['Desculpe, só são aceitos arquivos .pdf, .doc e .docx']); }

			$recaptcha = new \ReCaptcha\ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET'));
			$response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());
			if ( ! $response->isSuccess()) {
        		return back()->withErrors(['captcha' => 'Por favor, confirme que você não é um robô.'])->withInput();
			} 

			try {
				Mail::send('frontend.emails.trabalhe-conosco', ['input' => $input], function($message) use ($input) {
					$message->to('selecao.rh@sulplast.com.br')
						->subject('[sulplast.com.br] - Curriculum disponível');

					if ( ! empty(env('MAIL_TO_BCC'))) {
						$message->bcc(explode(';', env('MAIL_TO_BCC')));
					}
					

					if ( ! empty($input['arquivo'])) {
						$message->attach($input['arquivo']->getRealPath(), array(
							'as' => $input['arquivo']->getClientOriginalName(), 
							'mime' => $input['arquivo']->getMimeType())
						);
					}
				});
			} catch (Exception $e) {
				return back()->withErrors(['Desculpe, mas houve um erro no serviço de envio de e-mails. Tente novamente mais tarde. Erro: ' . $e->getMessage()]);
			}
			
			$message = app()->getLocale() == 'pt_BR' ? 'Mensagem enviada com sucesso! A Sulplast agradece o seu contato.' : 'Message sent!';
			Session::flash('app_message', $message);
			return redirect()->back();
		endif;
	
		return view('frontend.fale-conosco.trabalhe-conosco');
	}

}
