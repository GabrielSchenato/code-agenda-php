<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'agenda.index',
    'uses' => 'AgendaController@index'
]);

$router->get('/{letra}', [
    'as' => 'agenda.letra',
    'uses' => 'AgendaController@index'
]);

$router->post('/busca', [
    'as' => 'agenda.busca',
    'uses' => 'AgendaController@busca'
]);

$router->get('/contato/{id}/apagar', [
    'as' => 'pessoa.delete',
    'uses' => 'PessoaController@delete'
]);

$router->delete('/contato/{id}', [
    'as' => 'pessoa.destroy',
    'uses' => 'PessoaController@destroy'
]);

$router->get('/telefone/{id}/apagar', [
    'as' => 'telefone.delete',
    'uses' => 'TelefoneController@delete'
]);

$router->delete('/telefone/{id}', [
    'as' => 'telefone.destroy',
    'uses' => 'TelefoneController@destroy'
]);
