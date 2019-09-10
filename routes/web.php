<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('superadmin/login', 'Auth\LoginController@showAdminLoginForm')->name('superadmin.login');
Route::get('admin/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');

Route::get('superadmin/', 'Auth\LoginController@showAdminLoginForm')->name('superadmin.login');
Route::get('admin/', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::resource('superadmin/settings','SettingsController')->only(['index','update']);

Route::group(['as'=>'superadmin.','prefix'=>'/superadmin','namespace'=>'superadmin','middleware'=>['auth','superadmin']], function (){
   
	Route::get('/home', 'AdminController@index')->name('home');
	Route::post('/profile','AdminController@update_profile');
	
});

Route::group(['as'=>'admin.','prefix'=>'/admin','namespace'=>'admin','middleware'=>['auth','admin']], function (){
   
	Route::get('/home', 'AdminController@index')->name('home');
});

Route::group(['middleware'=>['auth','user']], function (){
   
	Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('logout', 'Auth\LoginController@logout')->name('logout');