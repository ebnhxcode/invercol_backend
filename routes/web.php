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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::resource('/frontend/cargos', '');
Route::resource('/frontend/contratos', '');
Route::resource('/frontend/cuentas', '');
Route::resource('/frontend/establecimientos', '');
Route::resource('/frontend/fichas_trabajadores', '');
Route::resource('/frontend/ingresos', '');
Route::resource('/frontend/libros', '');
Route::resource('/frontend/libros_cuentas', '');
Route::resource('/frontend/permisos', '');
Route::resource('/frontend/roles', '');
Route::resource('/frontend/subvenciones', '');
Route::resource('/frontend/tipos_contratos', '');
Route::resource('/frontend/tipos_documentos', '');
Route::resource('/frontend/usuarios', '');
*/




