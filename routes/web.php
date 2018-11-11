<?php

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
| 
|--------------------------------------------------------------------------
|
*/