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

Route::get('/', 'HomeController@index');
Route::get('/resume', function() {
    return view('resume');
});
Route::get('/projects', function() {
    return view('projects');
});
Route::get('/contact', function() {
    return view('contact');
});
