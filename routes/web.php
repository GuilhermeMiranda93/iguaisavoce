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

Route::get('/', 'Controller@home');

Route::get('/assuntos/{id}', 'Controller@assuntos');

Route::get('/audios', 'Controller@audios');

Route::get('/contato', 'Controller@contato');

Route::get('/videos', 'Controller@videos');

Route::get('/assuntos/post/{id}', 'Controller@assuntosPost');

Route::get('/loja', 'Controller@loja');

Route::get('/loja/detalhe/{id}', 'Controller@lojaDetalhe');

Route::get('/painel', function () {
	return view('painel/login');
});

Route::get('/painel/assunto', 'Controller@painelAssunto');
Route::get('/painel/audio', 'Controller@painelAudio');
Route::get('/painel/video', 'Controller@painelVideo');
Route::get('/painel/propaganda', 'Controller@painelPropaganda');

Route::get('/painel/produto', function () {
	echo 'ainda não existe página';
});

Route::get('/painel/painel', function () {
	return view('painel/painel');
});

Route::post('/painel/assunto/sav', 'Controller@saveBlog');
Route::post('/painel/audio/sav', 'Controller@saveAudio');
Route::post('/painel/video/sav', 'Controller@saveVideo');
Route::post('/painel/propaganda/sav', 'Controller@savePropaganda');

Route::get('/del/{id}', 'Controller@deletarBlog');
Route::get('/vis/{id}', 'Controller@verBlog');
Route::get('/edit/{id}', 'Controller@editarBlog');

Route::post('/sendContato','EmailController@sendContato');

Route::post('/painel/teste','Controller@upload');