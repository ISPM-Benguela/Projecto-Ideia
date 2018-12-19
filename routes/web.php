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

Route::get('/', 'HomeController@index')->name('inicio');

Route::get('sobre', 'HomeController@sobre')->name('sobre');

Route::get('sermembro', 'HomeController@sermembro')->name('sermembro');

Route::get('apoiar', 'HomeController@apoiar')->name('apoiar');

Route::get('contactos', 'HomeController@contactos')->name('contactos');

Route::get('blog', 'HomeController@blog')->name('blog');

Auth::routes();

Route::group(["middleware" => "auth"], function(){
    Route::group(['prefix' => 'membro','namespace' => 'Membro'], function(){

         Route::resource('principal', 'HomeController');

         Route::resource('area', 'AreaactucaoController');
        
        });
});

