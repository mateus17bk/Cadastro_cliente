<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',['as' => 'site.home' ,'uses' => 'Site\HomeController@index']);

Route::get('/admin/clientes',['as' => 'admin.clientes' ,'uses' => 'Admin\ClienteController@index']);
Route::get('/admin/clientes/adicionar',['as' => 'admin.clientes.adicionar' ,'uses' => 'Admin\ClienteController@adicionar']);
Route::post('/admin/clientes/salvar',['as' => 'admin.clientes.salvar' ,'uses' => 'Admin\ClienteController@salvar']);
Route::get('/admin/clientes/editar/{id}',['as' => 'admin.clientes.editar' ,'uses' => 'Admin\ClienteController@editar']);
Route::put('/admin/clientes/atualizar/{id}',['as' => 'admin.clientes.atualizar' ,'uses' => 'Admin\ClienteController@atualizar']);
Route::get('/admin/clientes/deletar/{id}',['as' => 'admin.clientes.deletar' ,'uses' => 'Admin\ClienteController@deletar']);