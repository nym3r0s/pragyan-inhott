<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ScoreBoard;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ViewController extends Controller
{
    public function index()
    {
        $scores = ScoreBoard::all();
        return view("home", compact('scores'));
    }
    
    public function scores(Request $request)
    {
        if(Session::has('admin_login'))
        {
            $scores = ScoreBoard::findOrFail($request->id);
            $scores->update($request->all());    
        }
        
        return redirect('/');
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
