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

//get para consulta
Route::get('/', function () { 
    return view('welcome');
});

Route::get('/framework', function () {
    return view('framework');
});

//consulta leva para a pagina web
Route::get('/contato', function () {
    return view('contato');
});

Route::get('/quemsomos', function () {
    return view('quem-somos');
});


