<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class RegController extends Controller
{
    public function insert_register(Request $request)
	{
		
				
		$rollno = Session::get('user_name');
		$name = $request->get('name');
		$hostel = $request->get('hostel');
		$grabToSmash = Input::has('grabToSmash');;
		$pragyanDesignChallenge = Input::has('pragyanDesignChallenge');
		$yaconai = Input::has('yaconai');
		$electrolution = Input::has('electrolution');
		$bytecodeJunior = Input::has('bytecodeJunior');
		$theUltimateManager = Input::has('theUltimateManager');
		$waterRocket = Input::has('waterRocket');
		$trollphy = Input::has('trollphy');
		
		DB::table('registrations')->insert(array(

											'rollno'     => $rollno,
											'name'   => $name,
											'hostel'       => $hostel,
											'grabToSmash'     => $grabToSmash,
											'pragyanDesignChallenge'   => $pragyanDesignChallenge,
											'yaconai'      => $yaconai,
											'electrolution'    => $electrolution,
											'bytecodeJunior'    => $bytecodeJunior,
											'theUltimateManager'    => $theUltimateManager,
											'bytecodeJunior'    => $bytecodeJunior,
											'waterRocket'    => $waterRocket,
											'trollphy'    => $trollphy));

		return view('final');
			
		
		
	}



	

	
	

}
