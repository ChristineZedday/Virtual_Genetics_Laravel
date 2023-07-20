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

Route::get('/logout', 'LogoutController@perform')->name('logout');



//routes de création et mise à jour

Route::get('/elevage.create', 'ElevageController@create')->name('elevage.create');

Route::post('/elevage.store', 'ElevageController@store')->name('elevage.store');

Route::get('/animal.create/{elevage}', 'AnimalController@create')->name('animal.create');

Route::post('/animal.store/{elevage}', 'AnimalController@store')->name('animal.store');

Route::get('/animal.edit/{animal}', 'AnimalController@edit')->name('animal.edit');

Route::post('/animal.update/{animal}', 'AnimalController@update')->name('animal.update');

Route::post('/update.notes/{animal}', 'AnimalController@updateNotes')->name('update_notes');

//routes générales élevage

Route::get('/dashboard/{id}', 'ElevageController@index')->name('dashboard');

Route::get('/budget/{elevage}', 'ElevageController@budget')->name('budget');

Route::get('/agricole/{elevage}', 'ElevageController@donneesAgricoles')->name('agricole');

Route::get('/agrandir/{elevage}', 'ElevageController@chercheTerres')->name('agrandir');

Route::post('/terres/{elevage}/{surface}', 'ElevageController@acheteTerres')->name('terres');

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

//routes compétiton

Route::get('/competition/{elevage}', 'CompetitionController@index')->name('competition');

Route::get('/competitions/{elevage}', 'CompetitionController@aVenir')->name('competitions');

Route::get('/resultats/{elevage}', 'CompetitionController@resultats')->name('resultats');

Route::get('/tous_resultats/{elevage}', 'CompetitionController@tousResultats')->name('tous_resultats');

Route::get('/inscrits/{elevage}', 'CompetitionController@inscrits')->name('inscrits');

Route::get('/competitions/{elevage}/{evenement}/{competition}', 'CompetitionController@inscrire')->name('inscrire');

Route::post('/inscription/{evenement}/{competition}', 'CompetitionController@inscription')->name('inscription');

Route::get('/desinscrire/{resultat}', 'CompetitionController@desinscrire')->name('desinscrire');

Route::get('palmares/{elevage}/{animal}/{resultat}', 'AnimalController@palmare')->name('palmares');
