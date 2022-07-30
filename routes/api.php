<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');
Route::get('/clientes/{id}', 'App\Http\Controllers\ClienteController@show');



Route::get('/paquetes', 'App\Http\Controllers\PaqueteController@index');
Route::get('/paquetes/{id}', 'App\Http\Controllers\PaqueteController@show');
Route::get('/paquetes/cliente/{idCliente}', 'App\Http\Controllers\PaqueteController@paquetesPorCliente');
Route::post('/paquetes', 'App\Http\Controllers\PaqueteController@store');