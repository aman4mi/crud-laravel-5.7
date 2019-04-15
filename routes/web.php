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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/contact','PagesController@index');
Route::get('/','StudentController@index');
Route::get('/students/create','StudentController@create');
Route::post('/students/store','StudentController@store');
Route::get('/students/edit/{id}','StudentController@edit');
Route::post('/students/update/{id}','StudentController@update');
Route::post('/students/delete/{id}','StudentController@delete');