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

Route::get('/', 'RouteController@index');
Route::get('/resume', function() {
    return view('resume');
});

Route::get('/projects', 'RouteController@showProjects');
Route::get('/contact', 'RouteController@showContact');
Route::post('/contact', 'RouteController@postContact');

Route::get('/blog', 'ArticleController@index');
Route::get('/blog/{id}/{slug?}', 'ArticleController@show');
Route::get('/tutorials', 'ArticleController@index');
Route::get('/tutorials/{id}/{slug?}', 'ArticleController@show');

Route::group(array('middleware' => 'auth'), function() {
    Route::get('/admin', 'ArticleController@adminIndex');
    Route::get('/admin/changepassword', 'RouteController@getChangePassword');
    Route::post('/admin/changepassword', 'RouteController@postChangePassword');
    Route::get('/admin/create', 'ArticleController@create');
    Route::post('/admin/create', 'ArticleController@store');
    Route::get('/admin/edit/{id}', 'ArticleController@edit');
    Route::post('/admin/edit/{id}', 'ArticleController@update');
    Route::get('/admin/delete/{id}', 'ArticleController@destroy');
});

// Permanent redirects from 2014
Route::get('/article/3/{stub?}', function(){
    return Redirect::to('/tutorials/1/setting-up-mailgun-with-laravel-42', 301);
});
Route::get('/article/9/{stub?}', function(){
    return Redirect::to('/tutorials/3/setting-up-ghost-as-a-service-on-ubuntu-linux', 301);
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);