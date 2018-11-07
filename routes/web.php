<?php

	$router->get('/', 'AdminController@index');
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
	$router->post('/profissionais', 'ProfissionaisController@store');
	$router->delete('/profissionais/{id}', 'ProfissionaisController@delete');
	$router->get('/profissionais/listar', 'ProfissionaisController@list');

/*
|--------------------------------------------------------------------------
| Local
|--------------------------------------------------------------------------
|
*/
	$router->post('/locais', 'LocaisController@store');
	$router->get('/locais/coordenadas/{id}', 'LocaisController@get');
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