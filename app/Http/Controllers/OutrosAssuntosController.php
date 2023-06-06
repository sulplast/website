<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;
use Exception;

class OutrosAssuntosController extends Controller {

	public function index(Request $request)
	{
		if (request()->isMethod('post')) {
			
			$request->validate([
				'nome' => 'required', 
				'email' => 'required|email', 
				'telefone' => 'required', 
				'assunto' => 'required', 
				'mensagem' => 'required', 
				'arquivo' => 'nullable|file|mimes:pdf,doc,docx|max:2048', 
				'concordo' => 'accepted'
			], [
				'concordo.accepted' => 'Você deve aceitar os termos da política de privacidade'
			]);

			$recaptcha = new \ReCaptcha\ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET'));
			$response = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());
			if ( ! $response->isSuccess()) {
        		return back()->withErrors(['captcha' => 'Por favor, confirme que você não é um robô.'])->withInput();
			}

			try {
				Mail::send('frontend.emails.outros-assuntos', ['input' => $request->all()], function($message) use ($request) {
					$message->to('sulplast@sulplast.com.br');

					if ( ! empty(env('MAIL_TO_BCC'))) {
						$message->bcc(explode(';', env('MAIL_TO_BCC')));
					}
					
					$message->subject('[sulplast.com.br] - Outros assuntos');

					if ( ! empty($request['arquivo'])) {
						$message->attach($request['arquivo']->getRealPath(), array(
							'as' => $request['arquivo']->getClientOriginalName(), 
							'mime' => $request['arquivo']->getMimeType())
						);
					}
				});
			} catch (Exception $e) {
				return back()->withErrors(['Desculpe, mas houve um erro no serviço de envio de e-mails. Tente novamente mais tarde. Erro: ' . $e->getMessage()]);
			}
			
			$message = app()->getLocale() == 'pt_BR' ? 'Mensagem enviada com sucesso! A Sulplast agradece o seu contato.' : 'Message sent!';
			Session::flash('app_message', $message);
			return redirect()->back();
		}


		return view('frontend.outros-assuntos.index');
	}

}
