<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TecnologiaProcessosController extends Controller {

	public function index()
	{
		return view('frontend.tecnologia.index');
	}

	public function termoplastico()
	{
		return view('frontend.tecnologia.termoplastico.index');
	}

	public function fibraDeVidro()
	{
		return view('frontend.tecnologia.fibra-de-vidro.index');
	}

	public function pintura()
	{
		return view('frontend.tecnologia.pintura.index');
	}

	public function desenvolvimentoDeProdutos()
	{
		return view('frontend.tecnologia.desenvolvimento-de-produtos.index');
	}

	public function termoplasticoExtrusao()
	{
		return view('frontend.tecnologia.termoplastico.extrusao.index');
	}

	public function termoplasticoVacuumForming()
	{
		return view('frontend.tecnologia.termoplastico.vacuum-forming.index');
	}

	public function termoplasticoRotomoldagem()
	{
		return view('frontend.tecnologia.termoplastico.rotomoldagem.index');
	}

	public function termoplasticoAcabamentoRobotizado()
	{
		return view('frontend.tecnologia.termoplastico.acabamento-robotizado.index');
	}

	public function termoplasticoAcabamentoInjecao()
	{
		return view('frontend.tecnologia.termoplastico.injecao.index');
	}

	public function fibraDeVidroHlu()
	{
		return view('frontend.tecnologia.fibra-de-vidro.hlu.index');
	}

	public function fibraDeVidroRtmLight()
	{
		return view('frontend.tecnologia.fibra-de-vidro.rtm-light.index');
	}

	public function fibraDeVidroRtmSkin()
	{
		return view('frontend.tecnologia.fibra-de-vidro.rtm-skin.index');
	}

	public function desenvolvimentoDeProdutosEngenhariaDeProdutos()
	{
		return view('frontend.tecnologia.desenvolvimento-de-produtos.engenharia-de-produtos.index');
	}

	public function desenvolvimentoDeProdutosLaboratorio()
	{
		return view('frontend.tecnologia.desenvolvimento-de-produtos.laboratorio.index');
	}

	public function desenvolvimentoDeProdutosGestaoDoSistemaDaQualidade()
	{
		return view('frontend.tecnologia.desenvolvimento-de-produtos.gestao-do-sistema-da-qualidade.index');
	}

	public function desenvolvimentoDeProdutosControleDeQualidadeEPosVenda()
	{
		return view('frontend.tecnologia.desenvolvimento-de-produtos.controle-de-qualidade-e-pos-venda.index');
	}

}
