<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',"ViewController@index");
Route::get('/login',"ViewController@login");
Route::post('/user/auth',"AuthController@auth");
Route::get('/register',"ViewController@register");
Route::get('/logout',"AuthController@logout");
