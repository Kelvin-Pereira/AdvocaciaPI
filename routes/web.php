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
    return view('Site.Home');
});

//Clientes
Route::get('/CadastroDeCliente','Cliente\ClienteController@index');

//Advogado
Route::get('/CadastroDeAdvogado','Advogado\AdvogadoController@index');
Route::get('/CadastarAdvogado','Advogado\AdvogadoController@CadastroAdvogado');
Route::post('/CadastarAdvogado','Advogado\AdvogadoController@CadastroAdvogado');