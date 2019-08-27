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
Route::get('/index', 'VideoController@listandoVideos');

// Cadastrar Video
Route::post('/video/upload','VideoController@cadastrandoVideos');

// Buscar vídeo
Route::get('/video/busca', 'VideoController@buscandoVideos');

// Reproduzir de Vídeo
Route::get('video/player/{id}','VideoController@reproduzindoVideos');

// Login Usuario
Route::post('/usuario/login', 'UserController@logandoUsuário');

//Cadastrar Usuario
Route::post('/usuario/cadastro','UserController@cadastrandoUsuario');

