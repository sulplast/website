<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Noticia;

class AdminNoticiaController extends Controller {

	public function store(Request $request)
	{
		$this->validate($request, [
			'titulo' => 'required'
		]);
		
		$noticia = new Noticia;
		$noticia->titulo = $request->titulo;
		$noticia->corpo = '<p>Digite aqui a sua notícia. Esta notícia ainda não está publicada</p>';
		$noticia->save();

		return back();
	}

}
