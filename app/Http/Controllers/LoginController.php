<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('/content/login/login_form');
	}

	public function reset_password()
	{
		//
		return view('/content/login/reset_password');
	}
   
}
