<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/establecimientos', 'Api\ResourcesController@establecimientos');
Route::get('/cuentas', 'Api\ResourcesController@cuentas');
Route::get('/libros', 'Api\ResourcesController@libros');
Route::get('/regiones', 'Api\ResourcesController@regiones');
Route::get('/comunas', 'Api\ResourcesController@comunas');
Route::get('/tipo_contratos', 'Api\ResourcesController@tipoContratos');
Route::get('/ficha_trabajadores', 'Api\ResourcesController@fichaTrabajadores');
Route::get('/cuenta_dependencias', 'Api\ResourcesController@cuentaDependencias');


