<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Noticia;
use Auth;

class NoticiasController extends Controller {

	public function index(Request $request)
	{
		$noticias = Noticia::orderBy('created_at', 'desc');

		// Verifica se o usuário está
		// logado no sistema.
		if ( ! Auth::check()) {
			$noticias = $noticias->where('locale', app()->getLocale())->whereNotNull('publicada_em');
		}

		$noticias = $noticias->paginate(5);
		return view('frontend.noticias.index', compact('noticias'));
	}

	public function ver(Request $request, $slug)
	{
		$noticia = Noticia::where('slug', $slug)->first();
		return view('frontend.noticias.visualizar', compact('noticia'));
	}

	public function atualizar(Request $request, $noticia)
	{
		$input = $request->all();

		foreach($input as $valor) {
			$r[] = $valor;
		}

		$noticia = Noticia::find($noticia);
		$noticia->corpo = $r[2];
		$noticia->update();

		return back();
	}

}
