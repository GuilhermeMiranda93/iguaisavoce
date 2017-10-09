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

/*-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

Funções Site

-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/

Route::get('/', 'Controller@home');

Route::get('/sobre', 'Controller@sobre');

Route::get('/assuntos/{id}', 'Controller@assuntos');

Route::get('/audios', 'Controller@audios');

Route::get('/contato', 'Controller@contato');

Route::get('/videos', 'Controller@videos');

Route::get('/assuntos/post/{id}', 'Controller@assuntosPost');

/*-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

Funções Loja

-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/

Route::post('/calcular-frete', 'StoreController@calcularFrete');

Route::get('/shopping', 'StoreController@LojaLista');
Route::get('/shopping/{id}', 'StoreController@LojaDetalhe');

Route::get('/carrinho', 'StoreController@LojaCarrinho');
Route::get('/addprodutocarrinho/{id}', 'StoreController@addProdutoCarrinho');
Route::get('/carrinho/removerprodutocarrinho/{id}', 'StoreController@removerProdutoCarrinho');

Route::get('/carrinho/finalizar', 'StoreController@finalizar');

Route::post('/pagseguro', 'PagSeguroController@pagseguro');

Route::post('/alterarquantidade', 'StoreController@alterarQuantidade');


/*-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

Funções painel

-=-=--=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=-=-*/

Route::get('/painel', function () {
	return view('painel/login');
});

Route::get('/painel/assunto', 'PainelController@painelAssunto');
Route::get('/painel/audio', 'PainelController@painelAudio');
Route::get('/painel/video', 'PainelController@painelVideo');
Route::get('/painel/propaganda', 'PainelController@painelPropaganda');
Route::get('/painel/produto', 'StoreController@painelProduto');


Route::get('/painel/painel', function () {
	return view('painel/painel');
});

Route::post('/painel/assunto/sav', 'PainelController@saveBlog');
Route::post('/painel/audio/sav', 'PainelController@saveAudio');
Route::post('/painel/video/sav', 'PainelController@saveVideo');
Route::post('/painel/propaganda/sav', 'PainelController@savePropaganda');
Route::post('/painel/produto/sav', 'StoreController@CadastrarProduto');

Route::get('/painel/sobre', 'PainelController@editarSobre');
Route::post('/painel/sobre/sav', 'PainelController@saveSobre');

Route::get('/del/{id}', 'PainelController@deletarBlog');
Route::get('/vis/{id}', 'PainelController@verBlog');
Route::get('/edit/{id}', 'PainelController@editarBlog');

Route::get('/delproduto/{id}', 'StoreController@deletarProduto');
Route::get('/visproduto/{id}', 'StoreController@verProduto');
Route::get('/editproduto/{id}', 'StoreController@editarProduto');

Route::post('/sendContato','EmailController@sendContato');

Route::post('/painel/teste','Controller@upload');