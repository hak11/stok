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

// Page Login
Route::get('/', ['as' =>  'login-index', 'uses' => 'LoginController@index' ]);
Route::post('/proses_login', ['as' =>  'proses-login', 'uses' => 'LoginController@loginPost' ]);
Route::get('/logout', ['as' =>  'logout-proses', 'uses' => 'LogoutController@logout' ]);

// Page Management User
Route::get('/regis', ['as' =>  'regis-user', 'uses' => 'RegisterController@index' ]);
Route::post('/proses_regis', ['as' =>  'proses-regis', 'uses' => 'RegisterController@regispost' ]);


// Page Beranda
Route::get('/home', ['as' =>  'home-index', 'uses' => 'BerandaController@index' ]);


// Page Master Area
Route::get('/area', ['as' =>  'area-index', 'uses' => 'AreaController@index' ]);
