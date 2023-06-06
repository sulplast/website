<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Pagina;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller {

	public function atualizarPagina(Request $request)
	{
		$pagina = Pagina::where('slug', $request->slug)->first();

		if ( empty($pagina)) {
			Session::flash('app_message', 'Página não encontrada!');
			return back();
		}
		
		$pagina->fill($request->all());
		$pagina->update();

		Session::flash('app_message', 'Configurações da página atualizadas com sucesso!');
		return back();
	}
}
