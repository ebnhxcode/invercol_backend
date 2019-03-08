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

/**
 * Rutas de recursos completos
 */
Route::resource('/frontend/cargos', 'CargoController');
Route::resource('/frontend/contratos', 'ContratoController');
Route::resource('/frontend/cuentas', 'CuentaController');
#Route::resource('/frontend/cuenta_dependencias', 'CuentaDependenciaController');
Route::resource('/frontend/establecimientos', 'EstablecimientoController');
Route::resource('/frontend/fichas_trabajadores', 'FichaTrabajadorController');
Route::resource('/frontend/ingresos', 'IngresoController');
Route::resource('/frontend/libros', 'LibroController');
Route::post('/frontend/libros/eliminar', 'LibroController@eliminarLibro');
#Route::resource('/frontend/libros_cuentas', 'LibroCuentaController');
Route::resource('/frontend/permisos', 'PermisoController');
Route::resource('/frontend/roles', 'RoleController');
Route::resource('/frontend/subvenciones', 'SubvencionController');
Route::resource('/frontend/tipos_contratos', 'TipoContratoController');
Route::resource('/frontend/tipos_documentos', 'TipoDocumentoController');
Route::resource('/frontend/usuarios', 'UsuarioController');
Route::resource('/frontend/paises', 'PaisController');
Route::resource('/frontend/regiones', 'RegionController');
Route::resource('/frontend/comunas', 'ComunaController');




