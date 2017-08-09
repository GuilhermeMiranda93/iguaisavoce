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

/*Route::get('/', function(){
	return view('emconstrucao');
});*/

Route::get('/', 'Controller@home');

Route::get('/assuntos/{id}', 'Controller@assuntos');

Route::get('/audios', 'Controller@audios');

Route::get('/contato', 'Controller@contato');

Route::get('/videos', 'Controller@videos');

Route::get('/assuntos/post/{id}', 'Controller@assuntosPost');



Route::get('/shopping', 'StoreController@LojaLista');
Route::get('/shopping/{id}', 'StoreController@LojaDetalhe');

Route::get('/carrinho', 'StoreController@LojaCarrinho');
Route::get('/addprodutocarrinho/{id}', 'StoreController@addProdutoCarrinho');
Route::get('/carrinho/removerprodutocarrinho/{id}', 'StoreController@removerProdutoCarrinho');

Route::get('/carrinho/finalizar', 'StoreController@finalizar');

Route::post('/pagseguro', 'PagSeguroController@pagseguro');


Route::get('/painel', function () {
	return view('painel/login');
});

Route::get('/painel/assunto', 'Controller@painelAssunto');
Route::get('/painel/audio', 'Controller@painelAudio');
Route::get('/painel/video', 'Controller@painelVideo');
Route::get('/painel/propaganda', 'Controller@painelPropaganda');
Route::get('/painel/produto', 'StoreController@painelProduto');


Route::get('/painel/painel', function () {
	return view('painel/painel');
});

Route::post('/painel/assunto/sav', 'Controller@saveBlog');
Route::post('/painel/audio/sav', 'Controller@saveAudio');
Route::post('/painel/video/sav', 'Controller@saveVideo');
Route::post('/painel/propaganda/sav', 'Controller@savePropaganda');
Route::post('/painel/produto/sav', 'StoreController@CadastrarProduto');

Route::get('/del/{id}', 'Controller@deletarBlog');
Route::get('/vis/{id}', 'Controller@verBlog');
Route::get('/edit/{id}', 'Controller@editarBlog');

Route::get('/delproduto/{id}', 'StoreController@deletarProduto');
Route::get('/visproduto/{id}', 'StoreController@verProduto');
Route::get('/editproduto/{id}', 'StoreController@editarProduto');

Route::post('/sendContato','EmailController@sendContato');

Route::post('/painel/teste','Controller@upload');