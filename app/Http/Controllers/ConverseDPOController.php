<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;
use Expcetion;

class ConverseDPOController extends Controller {

	public function index(Request $request)
	{
		if (request()->isMethod('post')) {
			
			$request->validate([
				'nome' => 'required', 
				'email' => 'required|email', 
				'assunto' => 'required', 
				'mensagem' => 'required', 
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
				Mail::send('frontend.emails.converse-com-dpo', ['input' => $request->all()], function($message) use ($request) {
					$message->to('lgpd@sulplast.com.br')
						->subject('[sulplast.com.br] - Converse com o DPO');
						
					if ( ! empty(env('MAIL_TO_BCC'))) {
						$message->bcc(explode(';', env('MAIL_TO_BCC')));
					}

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


		return view('frontend.converse-dpo.index');
	}

}
