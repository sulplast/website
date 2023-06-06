<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Session;

class VagasController extends Controller {

	public function index(Request $request)
	{
		return view('frontend.vagas.index');
	}

}
