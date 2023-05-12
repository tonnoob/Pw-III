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

Route::get('/', function () {
    return view('principal');
});

Route::get('/quemsomos', function () {
    return view('quem-somos');
});

Route::get('/laboratorio','laboratorioController@index');
Route::post('/laboratorio','laboratorioController@store');
Route::get('/laboratorio/excluir/{idLab}','LaboratorioController@destroy');

Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');

Route::get('/reclamacao','ReclamacaoController@index');
Route::post('/reclamacao','ReclamacaoController@store');
Route::get('/reclamacao/excluir/{idRec}','ReclamacaoController@destroy');


