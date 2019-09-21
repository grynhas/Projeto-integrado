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

// Index
Route::get('/', 'VideoController@listandoVideos');
Route::get('/index', 'VideoController@listandoVideos');

// Cadastrar Video
Route::get('/video/upload','VideoController@cadastroDeVideos');

Route::post('/video/upload','VideoController@salvandoVideo');

// Buscar vídeo
Route::get('/video/busca', 'VideoController@buscandoVideos');

// Reproduzir de Vídeo
Route::post('video/reproduzir/{id}','VideoController@reproduzir');

// Login Usuario
Route::post('/usuario/login', 'UserController@logandoUsuario');

//Cadastrar Usuario
Route::post('/usuario/cadastro','UserController@cadastrandoUsuario');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
