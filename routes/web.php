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
    return view('index');
});

Route::get('/', 'CompaniesController@index');
Route::get('/create', 'CompaniesController@create');
Route::post('/', 'CompaniesController@store'); 

Route::get('/detail/{id}',"DetailController@index" );

