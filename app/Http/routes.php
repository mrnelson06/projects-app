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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('overview', 'PagesController@overview');

Route::get('contact', 'PagesController@contact');

Route::get('about', 'PagesController@about');

Route::get('articles', 'ArticlesController@index');

Route::get('articles/{id}', 'ArticlesController@show');