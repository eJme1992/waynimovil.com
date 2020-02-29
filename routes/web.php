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

Route::get('/home', 'HomeController@index')->name('home');
//Auntentificacion de google  login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
//Autentificacion de google registro 
Route::get('/callback/{provider}', 'SocialController@callback');
// Importo contactos 
Route::get('contact', 'ImportGoogleContact@import');
//Route::get('contact/import/google', ['as'=>'google.import', 'uses'=>'ContactController@importGoogleContact']);
