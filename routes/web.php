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
Route::get('/home','HomeController@index');
Route::get('/encuestas/lista_sucursales/','HomeController@list_sucursales');
Route::get('/encuestas/lista_sucursales/{id}','HomeController@encuesta_now');
Route::get('/encuestas/lista_sucursales/{id}/{year}/{month}','HomeController@encuesta_date');
Route::get('/encuestas/detalle/{id}','HomeController@encuesta_detalle');


Route::group(['prefix' => 'movil'], function() {
    Route::get('/test','TestController@index');
    Route::get('/{sucursal}/', 'IndexMovilController@index')->name('index');
    Route::get('/{sucursal}/gracias', 'IndexMovilController@gracias')->name('index');
    Route::get('{sucursal}/options/{nombre}/{telefono}', 'IndexMovilController@options')->name('options');
    Route::get('{sucursal}/comentario/{nombre}/{telefono}', 'IndexMovilController@comentario')->name('options');
    Route::get('/{sucursal}/encuesta/{nombre}/{telefono}', 'IndexMovilController@encuesta')->name('encuesta');
    Route::post('/{sucursal}/save_encuesta','IndexMovilController@save_encuesta');
    Route::post('/{sucursal}/save_comentario','IndexMovilController@save_comentario');
});

Route::group(['prefix' => 'desktop'], function() {
    Route::get('/test','TestController@index');
    Route::get('/{sucursal}/', 'IndexDesktopController@index')->name('index');
    Route::get('/{sucursal}/gracias', 'IndexDesktopController@gracias')->name('index');
    Route::get('{sucursal}/options/{nombre}/{telefono}', 'IndexDesktopController@options')->name('options');
    Route::get('{sucursal}/comentario/{nombre}/{telefono}', 'IndexDesktopController@comentario')->name('options');
    Route::get('/{sucursal}/encuesta/{nombre}/{telefono}', 'IndexDesktopController@encuesta')->name('encuesta');
    Route::post('/{sucursal}/save_encuesta','IndexDesktopController@save_encuesta');
    Route::post('/{sucursal}/save_comentario','IndexDesktopController@save_comentario');
});











