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
Route::get('/menu', 'Menu@getPrivilegios')->name('menu');

Route::get('/actividades','Menu@showActividades')->name('actividades');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// -----------------------REGISTRO-POA---------------------------------
Route::get('POA/registrar','POAController@create')->name('addPOA');
Route::get('POA','POAController@index')->name('listPOA');
Route::get('POA/{id}','POAController@show');
Route::post('POA','POAController@store');
Route::post('POA/{id}','POAController@update');
Route::get('POA/eliminar/{id}','POAController@destroy');

// --------------------SEGUIMIENTO-POA---------------------------------
Route::get('SEGPOA/registrar','SEGPOAController@create')->name('addPOA');
Route::get('SEGPOA','SEGPOAController@index')->name('listPOA');
Route::get('SEGPOA/{id}','SEGPOAController@show');
Route::post('SEGPOA','SEGPOAController@store');
Route::post('SEGPOA/{id}','SEGPOAController@update');
Route::get('SEGPOA/eliminar/{id}','SEGPOAController@destroy');
Route::get('/rest_seg_act','SEGPOAController@get_seguimiento');




// -----------------------REGISTRO-POM---------------------------------
Route::get('POM/registrar','POMController@create')->name('addPOA');
Route::get('POM','POMController@index')->name('listPOA');
Route::get('POM/{id}','POMController@show');
Route::post('POM','POMController@store');
Route::post('POM/{id}','POMController@update');
Route::get('POM/eliminar/{id}','POMController@destroy');

// --------------------SEGUIMIENTO-POM---------------------------------
Route::get('SEGPOM/registrar','SEGPOMController@create')->name('addPOA');
Route::get('SEGPOM','SEGPOMController@index')->name('listPOA');
Route::get('SEGPOM/{id}','SEGPOMController@show');
Route::post('SEGPOM','SEGPOMController@store');
Route::post('SEGPOM/{id}','SEGPOMController@update');
Route::get('SEGPOM/eliminar/{id}','SEGPOMController@destroy');

// -----------------------REGISTRO-Presupuesto---------------------------------
Route::get('PRES/registrar','PRESController@create')->name('addPOA');
Route::get('PRES','PRESController@index')->name('listPOA');
Route::get('PRES/{id}','PRESController@show');
Route::post('PRES','PRESController@store');
Route::post('PRES/{id}','PRESController@update');
Route::get('PRES/eliminar/{id}','PRESController@destroy');

// -----------------------REGISTRO-EJECUCION---------------------------------
Route::get('EJEC/registrar','EJECController@create')->name('addPOA');
Route::get('EJEC','EJECController@index')->name('listPOA');
Route::get('EJEC/{id}','EJECController@show');
Route::post('EJEC','EJECController@store');
Route::post('EJEC/{id}','EJECController@update');
Route::get('EJEC/eliminar/{id}','EJECController@destroy');

