<?php

use Illuminate\Support\Facades\Route; 
use App\Http\controllers\WelcomController;

//Route::get('/', function () {
  //  return view('welcome');
//});
//Usuarios
 Route::prefix('/')->group(function () {
  Route::get('/', 'App\Http\Controllers\WelcomController@index')->name('pagina.index');
    //Route::get('create', 'UserController@create')->name('users.create');
  Route::post('store', 'App\Http\Controllers\WelcomController@store')->name('pagina.store');
    //Route::get('{id}/edit', 'UserController@edit')->name('users.edit');
    //Route::post('update', 'UserController@update')->name('users.update');
 });


//Route::resource('/',WelcomController::class);
 