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
	//return view('welcome');
   }); 

Route::get('/logout', function () {
	Auth::logout();

	return redirect('/login');
   }); 


Route::get('/aha', function () {
	return view('coba');
   });

Auth::routes();

			//infraction
Route::get('/home', 'Combinasi\HomeController@index')->name('home');
Route::get('/infraction', 'Combinasi\InfractionController@index');
//Route::post('/infraction', 'Combinasi\InfractionController@save');
Route::get('/infraction/add', 'Combinasi\InfractionController@add');
Route::post('/infraction/store', 'Combinasi\InfractionController@store');
Route::get('/infraction/edit/{id}', 'Combinasi\InfractionController@edit');
Route::post('/infraction/update/{id}', 'Combinasi\InfractionController@update');
Route::get('/infraction/delete/{id}','Combinasi\InfractionController@delete');


				//Admin
Route::get('/admin', 'Combinasi\AdminController@index');
Route::get('/admin/addpoint', 'Combinasi\AdminController@addpoint');
Route::get('/admin/add', 'Combinasi\AdminController@add');
Route::post('/admin/store', 'Combinasi\AdminController@store');
Route::get('/admin/edit/{id}', 'Combinasi\AdminController@edit');
Route::post('/admin/update/{id}', 'Combinasi\AdminController@update');
Route::get('/admin/delete/{id}','Combinasi\AdminController@delete');
Route::post('/admin/hitung','Combinasi\AdminController@hitung');



		//student
Route::get('/student', 'Combinasi\StudentController@index');
Route::get('/student-detail', 'Combinasi\StudentController@detail');

