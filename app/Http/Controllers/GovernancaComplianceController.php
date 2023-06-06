<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GovernancaComplianceController extends Controller {

	public function index()
	{
		return view('frontend.governanca-e-compliance.index');
	}

}
