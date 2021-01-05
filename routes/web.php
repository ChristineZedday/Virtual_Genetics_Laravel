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

//routes de login

Auth::routes();

Route::get('/', function () { if ( Auth::check() ) {return redirect()->action('HomeController@index');} else {return view('bienvenue');}});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/elevage.create', 'ElevageController@create')->name('elevage.create');

Route::post('/elevage.store', 'ElevageController@store')->name('elevage.store');

Route::get('/animal.create/{elevage}', 'AnimalController@create')->name('animal.create');

Route::post('/animal.store/{elevage}', 'AnimalController@store')->name('animal.store');

//routes générales élevage

Route::get('/dashboard/{id}', 'ElevageController@index')->name('dashboard');

Route::get('/budget/{elevage}', 'ElevageController@budget')->name('budget');

Route::get('/temps/{elevage}', 'TempsController@nextMonth')->name('temps');


//Routes listant des animaux

Route::get('/animaux/{elevage}/{filtre}', 'ElevageController@listeAnimaux')->name('animaux');

Route::get('/animal/{elevage}/{animal}', 'AnimalController@show')->name('animal');

//Routes achat vente


Route::get('/animal.vendre/{elevage}/{animal}', 'AnimalController@vendre')->name('vendre');

Route::put('/animal.envente', 'AnimalController@vente')->name('vente');

Route::get('/animal.pas.vendre/{animal}', 'AnimalController@pasVendre')->name('pas.vendre');

Route::get('/animaux/avendre/{elevage}/{race}', 'ElevageController@animauxAVendre')->name('avendre');

Route::get('/animal/acheter/{elevage}/{animal}', 'AnimalController@acheter')->name('acheter');

//routes reproduction

Route::get('/reproduction/jument/{elevage}', 'ElevageController@faireSaillir')->name('reproduction.jument');

Route::get('/reproduction/etalons/{elevage}/{jument}', 'ElevageController@choixEtalon')->name('saillir');

Route::get('/reproduction/etalon/{elevage}/{etalon}/{jument}', 'AnimalController@confirmeEtalon')->name('etalon')->middleware('confirme');

Route::get('/reproduction/croisement/{elevage}/{etalon}/{jument}', 'ReproductionController@croisement')->name('croisement');

Route::get('/reproduction/consang/{elevage}/{etalon}/{jument}', 'ReproductionController@devoileConsang')->name('consang');

Route::get('/reproduction/etalon/{elevage}/{etalon}', 'ElevageController@commissionEtalons')->name('commission');

Route::get('/reproduction/monte/{elevage}/{etalon}', 'ElevageController@proposerMonte')->name('monte');

Route::get('/reproduction/demonte/{elevage}/{etalon}', 'ElevageController@retirerMonte')->name('demonte');

Route::put('/reproduction/montepublique/{elevage}', 'ElevageController@montePublique')->name('montepublique');

//routes enregistrement 

Route::get('/enregistrement/{animal}', 'AnimalController@enregistrer')->name('enregistrement');

Route::put('/registration/{animal}', 'AnimalController@registration')->name('registration');

//Stériliser

Route::get('/steriliser/{elevage}/{animal}', 'AnimalController@steriliser')->name('steriliser');
