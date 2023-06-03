<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Conteudo;

class FrontendController extends Controller {

	public function index()
	{
		return view('frontend.index');
	}

	public function aplicar(Request $request)
	{
		$conteudo = Conteudo::where('feature', $request->feature)->first();
		$conteudo->revisao = $request->mce_0;
		$conteudo->update();

		return back();
	}
}
