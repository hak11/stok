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


// Page Master Barang
Route::resource('master_item', 'master_itemController',[
	'names' =>['index' => 'master-item','create' => 'master-item-create', 'edit' => 'master-item-edit', 'show' => 'master-item-show']
	]);

//Page Master Area
Route::resource('master_area', 'master_areaController',[
	'names' =>['index' => 'master-area','create' => 'master-area-create', 'edit' => 'master-area-edit','show' => 'master-area-show']
	]);

//Page Master Kategori Barang
Route::resource('master_kategori_barang', 'master_kategori_barangController',[
	'names' =>['index' => 'master-kategori-barang','create' => 'master-kategori-barang-create', 'edit' => 'master-kategori-barang-edit', 'show' => 'master-kategori-barang-show']
	]);

