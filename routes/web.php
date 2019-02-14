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

Route::post('apoio', 'HomeController@store')->name('apoio');

Route::get('blog', 'HomeController@blog')->name('blog');

Auth::routes();

Route::group(["middleware" => "auth"], function(){
    Route::group(['prefix' => 'membro','namespace' => 'Membro'], function(){

        Route::get('/', 'AreaactucaoController@principal')->name('principal');

         Route::resource('area', 'AreaactucaoController');

         Route::resource('artigo', 'ArtigoController');

         Route::resource('usuarios', 'UsuarioController');
         
        /*
         Route::resource('nivel', 'NivelController');

         Route::resource('previlegio', 'PrevilegioController');
         */

         Route::resource('contacto', 'ContactoController');

         Route::resource('candidato', 'CandidaturaController');

         Route::resource('membronaoactivo', 'DoacaoMembroNaoActvo');
         

         Route::resource('membroactivo', 'DoacaoMembroActivoController');

         Route::resource('sugestao', 'SugestaoController');

         Route::resource('documentos', 'DocumentoController');

         Route::resource('actividade', 'ActividadeController');

         Route::resource('perfil', 'PerfilController');

         Route::resource('configuracao', 'ConfiguracaoController');

         Route::get('add_slide', 'ConfiguracaoController@add_slide')->name('add_slide');

         Route::post('salva_slide', 'ConfiguracaoController@salva_slide')->name('salva_slide');

         Route::get('slide_edit', 'ConfiguracaoController@slide_edit')->name('slide_edit');

         Route::post('email','SugestaoController@email')->name('email');

        
        });
});

