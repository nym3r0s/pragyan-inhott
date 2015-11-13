<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ViewController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function login()
    {
        return view("login");
    }

    public function register()
    {
        if(!Session::has('user_name'))
        {
            return Redirect::to('login')->with('message', 'Please Login to register');
        }
        else
        {
            return view('register');
        }
    }
}
