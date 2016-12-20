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

//Homepage
Route::get('/', function () {
    return view('content/home');
});

//Universe
Route::get('/universe', function () {
    return view('content/universe');
});

//Rules
Route::get('/rules', function () {
    return view('content/rules');
});

//Races
Route::resource( 'races', 'RacesController' );
Route::get( 'races/{race}/delete', 'RacesController@delete' ) -> name( 'races.delete' );

//Classes
Route::resource( 'classes', 'ClassesController' );
Route::get( 'classes/{class}/delete', 'ClassesController@delete' ) -> name( 'classes.delete' );

//Abilities
Route::resource( 'abilities', 'AbilitiesController' );
Route::get( 'abilities/{ability}/delete', 'AbilitiesController@delete' ) -> name( 'abilities.delete' );

//Skills
Route::resource( 'skills', 'SkillsController' );
Route::get( 'skills/{skill}/delete', 'SkillsController@delete' ) -> name( 'skills.delete' );

//Feats
Route::resource( 'feats', 'FeatsController' );
Route::get( 'feats/{feat}/delete', 'FeatsController@delete' ) -> name( 'feats.delete' );

//Powers
Route::resource( 'powers', 'PowersController' );
Route::get( 'powers/{power}/delete', 'PowersController@delete' ) -> name( 'powers.delete' );

//Items
Route::resource( 'items', 'ItemsController' );
Route::get( 'items/{item}/delete', 'ItemsController@delete' ) -> name( 'items.delete' );

//Alignement
Route::get('/alignements', function () {
    return view('content/alignements');
});
