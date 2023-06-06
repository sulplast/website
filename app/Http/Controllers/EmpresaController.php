<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpresaController extends Controller {

	public function index()
	{
		return view('frontend.empresa.index');
	}

	public function politicaDaQualidade()
	{
		return view('frontend.empresa.politica-qualidade');
	}

	public function missaoVisao()
	{
		return view('frontend.empresa.missao-e-visao');
	}

	public function certificacoesPremios()
	{
		return view('frontend.empresa.certificacoes-e-premios');
	}

	public function codigoCondutaEtica()
	{
		return view('frontend.empresa.codigo-conduta-etica');
	}

	public function planoDecontingencia()
	{
		return view('frontend.empresa.plano-de-contingencia');
	}

	public function politicaDaSaudeESegurancao()
	{
		return view('frontend.empresa.politica-da-saude-e-seguranca');
	}
}
