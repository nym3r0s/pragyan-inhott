<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
            // debug
            // 
            //Session::put('user_name','111456111');
            //return Redirect::to('register');
            //Actual code
            $email = $request->get('email');
            $password=$request->get('password');
            
            $username=explode("@",$request->get('email')); 
            $username = $username[0];
            
            $shellcmd = "python2 nitt_imap_login.py ".$username." ".$password;
            $imap = shell_exec($shellcmd);
            
            if($imap == 1)
            {
                Session::put('user_name',$username);
                // Add appropriate redirect here
                return Redirect::to('register');
            }
            else
            {
                // Add appropriate redirect here
                return Redirect::to('login')->with('message', 'Incorrect Username or Password');
            }    
    }
    public function logout()
    {
        Session::flush(); 
        return redirect()->action('ViewController@index');
    }
}
