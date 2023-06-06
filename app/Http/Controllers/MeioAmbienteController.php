<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeioAmbienteController extends Controller {

	public function index()
	{
		return view('frontend.meio-ambiente.index');
	}

	public function porQueSePreocupar()
	{
		return view('frontend.meio-ambiente.por-que-se-preocupar');
	}

	public function fornecedoresMeioAmbiente()
	{
		return view('frontend.meio-ambiente.fornecedores-e-meio-ambiente');
	}

	public function iso14001OQueSignifica()
	{
		return view('frontend.meio-ambiente.iso-14001-o-que-significa');
	}

	public function cicloDeVidaDoProduto()
	{
		return view('frontend.meio-ambiente.ciclo-de-vida-do-produto');
	}

}
