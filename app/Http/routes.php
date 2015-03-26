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
Route::get('/blog', 'ArticleController@index');
Route::get('/blog/{id}/{slug?}', 'ArticleController@show');
Route::get('/tutorials', 'ArticleController@index');
Route::get('/tutorials/{id}/{slug?}', 'ArticleController@show');
Route::get('/contact', function() {
    return view('contact');
});
Route::post('/contact', 'RouteController@postContact');

Route::group(array('middleware' => 'auth'), function() {
    Route::get('/admin', 'ArticleController@adminIndex');
    Route::get('/admin/create', 'ArticleController@create');
    Route::post('/admin/create', 'ArticleController@store');
    Route::get('/admin/edit/{id}', 'ArticleController@edit');
    Route::post('/admin/edit/{id}', 'ArticleController@update');
    Route::get('/admin/delete/{id}', 'ArticleController@destroy');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);