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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::resource('contacts', 'ContactsController');

// Route::get('/', 'WelcomeController@index');
// Route::get('contact', 'WelcomeController@contact');
//
// Route::get('/', function () {
//     return view('welcome');
// });
