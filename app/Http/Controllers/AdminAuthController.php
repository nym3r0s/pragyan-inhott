<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdminAuthController extends Controller {

	public function login()
	{
		
			return view('admin_login');
    }

    public function auth(Request $request)
	{
			$username=$request->get('username'); 
			$password=$request->get('password');
			echo $username." ".$password;
			if($username == "admin" && $password == "pragyan")
			{
				return Redirect::to('admin/home');
			}
			else
			{
				return Redirect::to('admin/login')->with('message', 'Incorrect Username or Password');
			}
	}

	

    public function admin_home()
	{
		$details = DB::select('select * from registrations');

		//var_dump($details);
		//die();

		return view('admin_home',compact('details'));//return view page to be displayed
	}

}
