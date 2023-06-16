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

Route::get('/laboratorio','LaboratorioController@index');
Route::post('/laboratorio','LaboratorioController@store');
Route::get('/laboratorio/excluir/{idLaboratorio}','LaboratorioController@destroy');
Route::get('/laboratorio/editar/{idLaboratorio}','LaboratorioController@edit');
Route::post('/laboratorio/update/{idLaboratorio}','LaboratorioController@update');

Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');
Route::get('/contato/editar/{idContato}','ContatoController@edit');
Route::post('/contato/update/{idContato}','ContatoController@update');

Route::get('/reclamacao','ReclamacaoController@index');
Route::post('/reclamacao','ReclamacaoController@store');
Route::get('/reclamacao/excluir/{idRec}','ReclamacaoController@destroy');
Route::get('/reclamacao/editar/{idRec}','ReclamacaoController@edit');
Route::post('/reclamacao/update/{idRec}','ReclamacaoController@update');

Route::get('/pc','PcController@index');
Route::post('/pc','PcController@store');
Route::get('/pc/excluir/{idPc}','PcController@destroy');
Route::get('/pc/editar/{idPc}','PcController@edit');
Route::post('/pc/update/{idPc}','PcController@update');

Route::get('/viacep', function () {
    return view('viacep');
});

Route::get('/grafico', function () {
    return view('grafico');
});

