<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages/welcome');
});


/**
 * Groupe de route derrier 1 controller
 */
Route::group(['prefix' => 'movie'], function () {

    /**
     * URIS derriere le groupe de route
     * qui appel le bon controlleurs et la méthode e controlleur
     *
     * NomduControlleur@methodedecontrolleur
     */
    Route::get('/index', 'MovieController@index')->name('index');
    Route::get('/create', 'MovieController@create')->name('create');
    Route::get('/update', 'MovieController@update')->name('update');
    Route::get('/remove', 'MovieController@remove')->name('remove');

});



Route::group(['prefix' => 'categories'], function () {

    Route::get('/index', 'CategoriesController@index')->name('index');
    Route::get('/create', 'CategoriesController@create')->name('create');
    Route::get('/update', 'CategoriesController@update')->name('update');
    Route::get('/remove', 'CategoriesController@remove')->name('remove');

});


Route::group(['prefix' => 'actors'], function () {

    Route::get('/index', 'ActorsController@index')->name('index');
    Route::get('/create', 'ActorsController@create')->name('create');
    Route::get('/update', 'ActorsController@update')->name('update');
    Route::get('/remove', 'ActorsController@remove')->name('remove');

});




/**
 * Création de Route en GET
 * /about ma route interne: URI
 * return view: retourner la vue
 */
Route::get('/about', function () {
    return view('pages/about');
});

/**
 * Page Contact
 */
Route::get('/contact', function () {
    return view('pages/contact');
});

/**
 * Page FAQ
 */
Route::get('/faq', function () {
    return view('pages/faq');
});

/**
 * Page mention legales
 */
Route::get('/mentions-legales', function () {
    return view('pages/mention');
});

/**
 * Menu de naviguation (Boostrapp?)
 * ul > li * 5:
 * home, contact, about, faq, mention légales
 */


/**
 * Mark: Mieux organiser nos vues ?
 * Amand: Réutiliser le menu partout...??
 * ALexandre : include
 * Joel: retourner ce que tu veux ...??
 */


