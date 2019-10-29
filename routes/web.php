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

use App\Mail\InternMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

Auth::routes();



Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/contact', function(Request $request){
    Mail::send(new InternMail($request));
    return redirect('/');
});


Route::get('/', 'CompaniesController@index');

Route::get('/create', 'CompaniesController@create');
Route::get('/create', 'OptionsController@index');
Route::post('/', 'CompaniesController@store');


Route::get('/detail/{id}',"DetailController@index");

Route::get('/{id}/edit', 'OptionsController@edit');
Route::patch('/{id}', 'CompaniesController@update');

Route::post('/{id}/edit/available', 'AvailableController@store');
