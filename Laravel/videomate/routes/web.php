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

//perfil
Route::get('/perfil', 'UserController@exibirPerfil');

// Cadastrar Video
Route::get('/video/upload','VideoController@cadastroDeVideos');
Route::post('/video/upload','VideoController@salvandoVideo');

//Meus videos (atualização 22.09.19)
Route::get('/video/meusvideos/{id}','VideoController@listandoMeusVideos');

// Buscar vídeo
Route::get('/video/busca/{input}', 'VideoController@buscandoVideos');

// Alterar video
Route::get('/videos/alterar/{id}', 'VideoController@alterandoVideo');
Route::put('/videos/alterar/{id}', 'VideoController@alterandoVideo');
// Reproduzir de Vídeo
Route::get('video/reproduzir/{id}','VideoController@reproduzir');

// Login Usuario
Route::post('/usuario/login', 'UserController@logandoUsuario');

//Cadastrar Usuario
Route::post('/usuario/cadastro','UserController@cadastrandoUsuario');


//deletar video
Route::delete('/video/meusvideos/{id}', 'VideoController@removendoVideo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
