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
Route::get('/',"ExcursionController@indexWeb")->name("web.index");
Route::get('/excursion',"ExcursionController@galeriaExcursion")->name("web.excursiones");

Route::group(["prefix" => "admin", "middleware" => ["auth","isAdmin"]],function(){
    
    Route::group(["prefix" => "excursiones"],function(){

        Route::get("/", "ExcursionController@index")->name("excursiones.index");

        Route::get("/create", "ExcursionController@create")->name("excursiones.create");

        Route::post("/store", "ExcursionController@store")->name("excursiones.store");

        Route::get("{id}/edit", "ExcursionController@edit")->name("excursiones.edit");
      
        Route::put("{id}/update", "ExcursionController@update")->name("excursiones.update");

        Route::delete("{id}/delete", "ExcursionController@delete")->name("excursiones.delete");
    });

    Route::group(["prefix" => "personal"],function(){

        Route::get("/", "PersonalController@index")->name("personal.index");

        Route::get("/create", "PersonalController@create")->name("personal.create");

        Route::post("/store", "PersonalController@store")->name("personal.store");

        Route::get("{id}/edit", "PersonalController@edit")->name("personal.edit");
      
        Route::put("{id}/update", "PersonalController@update")->name("personal.update");

        Route::delete("{id}/delete", "PersonalController@delete")->name("personal.delete");
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
