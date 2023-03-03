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
    return view('welcome');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/quemsomos', function () {
    return view('quemsomos');
});
Route::get('/reclamacao', function () {
    return view('reclamacao');
});
Route::get('/principal', function () {
    return view('principal');
});
Route::get('/laboratorio', function () {
    return view('laboratorio');
});