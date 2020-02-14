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



Auth::routes();

  Route::get('/', function () { if ( Auth::check() ) {return redirect()->action('HomeController@index');} else {return view('bienvenue');}});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/elevage.create', 'ElevageController@create')->name('elevage.create');

Route::post('/elevage.store', 'ElevageController@store')->name('elevage.store');

Route::get('/dashboard/{id}', 'ElevageController@index')->name('dashboard');

Route::get('/animaux/{elevage}', 'ElevageController@listeAnimaux')->name('animaux');

Route::get('/budget/{elevage}', 'ElevageController@budget')->name('budget');

Route::get('/temps', 'TempsController@nextMonth')->name('temps');

Route::get('/animal/{elevage}/{animal}', 'AnimalController@show')->name('animal');

Route::get('/animal.vendre/{elevage}/{animal}', 'AnimalController@vendre')->name('vendre');

Route::put('/animal.envente', 'AnimalController@vente')->name('vente');

Route::get('/animal.pas.vendre/{elevage}/{animal}', 'AnimalController@pasVendre')->name('pas.vendre');

Route::get('/animal.acheter/{elevage}/{animal}', 'AnimalController@acheter')->name('acheter');
