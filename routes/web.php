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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/nova-pergunta', 'PerguntasController@novaPergunta');
Route::post('/home/adicionar', 'PerguntasController@adicionar');
Route::get('/home/perguntas', 'PerguntasController@lista');
Route::get('/home/pergunta/{id}', 'PerguntasController@pergunta');
Route::post('/home/resposta', 'RespostasController@responder');