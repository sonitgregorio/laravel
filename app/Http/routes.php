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
// */

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\MyController;


Route::get('/', 'MyController@index');

Route::resource('insert_data', 'MyController@insert_data');

Route::get('/delete/{ids}', 'MyController@delete');
