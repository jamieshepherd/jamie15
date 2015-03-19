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
Route::get('/blog', function() {
    return view('blog');
});
Route::get('/projects', function() {
    return view('projects');
});
Route::get('/tutorials', function() {
    return view('tutorials');
});
Route::get('/contact', function() {
    return view('contact');
});


Route::get('/admin', function() {
   return view('admin/index');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);