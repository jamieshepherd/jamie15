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
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}/{slug?}', 'BlogController@show');
Route::get('/tutorials', 'TutorialController@index');
Route::get('/contact', function() {
    return view('contact');
});


Route::get('/admin', function() {
   return view('admin/index');
});

Route::get('/admin/blog', 'BlogController@adminIndex');
Route::get('/admin/blog/create', 'BlogController@create');
Route::post('/admin/blog/create', 'BlogController@store');
Route::get('/admin/blog/edit', 'BlogController@edit');
Route::post('/admin/blog/edit', 'BlogController@update');
Route::get('/admin/tutorials', 'TutorialController@adminIndex');
Route::get('/admin/tutorials/create', 'TutorialController@create');
Route::post('/admin/tutorials/create', 'TutorialController@store');
Route::get('/admin/tutorials/edit', 'TutorialController@edit');
Route::post('/admin/tutorials/edit', 'TutorialController@update');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);