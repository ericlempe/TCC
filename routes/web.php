<?php
// use App\Categoria;
// $router->get('/teste', function() {
// 	return Categoria::find(1)->profissionais;
// });

/*	
|--------------------------------------------------------------------------
| Administrador
|--------------------------------------------------------------------------
|
*/	
	$router->post('/admin', 'AdminController@store');
	$router->delete('/admin/{id}', 'AdminController@delete');

/*
|--------------------------------------------------------------------------
| Profissional
|--------------------------------------------------------------------------
|
*/
	$router->get('/profissionais/{id}/buscar', 'ProfissionaisController@buscar');
	$router->get('/profissionais/listar', 'ProfissionaisController@list');
	$router->post('/profissionais', 'ProfissionaisController@store');
	$router->delete('/profissionais/{id}', 'ProfissionaisController@delete');

/*
|--------------------------------------------------------------------------
| Local
|--------------------------------------------------------------------------
|
*/
	$router->post('/locais', 'LocaisController@store');
	$router->post('/locais/getCoordenadas', 'LocaisController@getCoordenadas');
	$router->delete('/locais/{id}', 'LocaisController@delete');

/*
|--------------------------------------------------------------------------
| Leitor
|--------------------------------------------------------------------------
|
*/
	$router->post('/leitores', 'LeitoresController@store');
	$router->delete('/leitores/{id}', 'LeitoresController@delete');

/*
|--------------------------------------------------------------------------
| Tag
|--------------------------------------------------------------------------
|
*/
	$router->post('/tags', 'TagsController@store');
	$router->delete('/tags/{id}', 'TagsController@delete');

/*
|--------------------------------------------------------------------------
| Categorias
|--------------------------------------------------------------------------
|
*/
	$router->get('/categorias/listar', 'CategoriasController@list');
	$router->get('/categorias/profissionais', 'CategoriasController@listProfissional');
	$router->post('/categorias', 'CategoriasController@store');
	$router->delete('/categorias/{id}', 'CategoriasController@delete');
/*
|--------------------------------------------------------------------------
| 
|--------------------------------------------------------------------------
|
*/