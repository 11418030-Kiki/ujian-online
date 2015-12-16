<?php namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Auth;
use App\Models\Siswa;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		if (Auth::check()) 
		{
    		// The user is logged in...
    		//return view('content/scadmin/dashboard');
			$user = Auth::user();
			//$siswa = Siswa::where('USERNAME', $user->email);
			//$flight = App\Flight::where('active', 1)->first();
			if($user->role == 1)
			{
				return view('content/scadmin/dashboard');
			}
			elseif ($user->role == 2) {
				return view('content/scguru/dashboard');
				//return response('Unauthorized.', 401);
			}
			else
			{
				return view('content/scsiswa/dashboard');
			}
			}
		else 
		{
			return view('content/login/login_form');
		}
	}

	public function reset_password()
	{
		//
		return view('/content/login/reset_password');
	}
   
}
