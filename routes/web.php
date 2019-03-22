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

// Favor não apagar: Por Kelvin
//---------------------------------------
//----    Modelo padrao para rotas   ----
//---------------------------------------
// $this::group(['prefix' => 'cargo'], function () {
//     $this::get('/index',        ['uses' => 'CargoController@index',   'as' => 'cargo.index']);
//     $this::get('/form',         ['uses' => 'CargoController@create',  'as' => 'cargo.create']);
//     $this::post('/store',       ['uses' => 'CargoController@store',   'as' => 'cargo.store']);
//     $this::get('/edit/{id}',    ['uses' => 'CargoController@edit',    'as' => 'cargo.edit']);
//     $this::get('/destroy/{id}', ['uses' => 'CargoController@destroy', 'as' => 'cargo.destroy']);
// });
// Exemplo dos actions dos formulario
// action=" {{ route('cargo.index')  }} "
// action=" {{ route('cargo.create')  }} "
// action=" {{ route('cargo.store')  }} "
// action=" {{ route('cargo.edit')  }} "
// action=" {{ route('cargo.destroy')  }} "