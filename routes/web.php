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

Route::view('/', 'welcome');

Route::view('a-propos', 'a-propos');

Route::view('la-sousoupe', 'la-sousoupe');

//Route::view('contact', 'contact');

// Clients
/*Route::get('clients', 'ClientsController@index');
Route::get('clients/create', 'ClientsController@create');
Route::get('clients/{client}', 'ClientsController@show');
Route::get('clients/{client}/edit', 'ClientsController@edit');
Route::post('clients', 'ClientsController@store');
Route::post('clients/{client}', 'ClientsController@update');
Route::delete('clients/{client}', 'ClientsController@destroy');
*/
Route::resource('clients', 'ClientsController');

//Contacts
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');