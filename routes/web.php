<?php

use Illuminate\Support\Facades\Route; 
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
	return view('auth.login');
   }); 

Route::get('/kedua', function () {
	return view('halaman1');
   });

Auth::routes();

Route::get('/home', 'Combinasi\HomeController@index')->name('home');
Route::get('/infraction', 'Combinasi\InfractionController@index');
Route::post('/infraction', 'Combinasi\InfractionController@save');
Route::get('/infraction/create', 'Combinasi\InfractionController@create');
Route::post('/infraction/store', 'Combinasi\InfractionController@store');
Route::get('/infraction/edit/{id}', 'Combinasi\InfractionController@edit');
Route::post('/infraction/update/{id}', 'Combinasi\InfractionController@update');