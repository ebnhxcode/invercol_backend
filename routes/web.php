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
 * Rutas de recursos completos para mantenedores
 */
Route::resource('/frontend/cargos', 'CargoController');
Route::resource('/frontend/comunas', 'ComunaController');
Route::resource('/frontend/continentes', 'ContinenteController');
Route::resource('/frontend/contratos', 'ContratoController');
Route::resource('/frontend/cuentas', 'CuentaController');
Route::resource('/frontend/cuenta_dependencias', 'CuentaDependenciaController');
Route::resource('/frontend/establecimientos', 'EstablecimientoController');
Route::resource('/frontend/estados', 'EstadoController');
Route::resource('/frontend/fichas_trabajadores', 'FichaTrabajadorController');
Route::resource('/frontend/funciones', 'FuncionController');
Route::resource('/frontend/ingresos', 'IngresoController');
Route::resource('/frontend/libros', 'LibroController');
Route::resource('/frontend/libros_cuentas', 'LibroCuentaController');
Route::resource('/frontend/libros_tipos_documentos', 'LibroTipoDocumentoController');
Route::resource('/frontend/paises', 'PaisController');
Route::resource('/frontend/permisos', 'PermisoController');
Route::resource('/frontend/regiones', 'RegionController');
Route::resource('/frontend/roles', 'RoleController');
Route::resource('/frontend/subvenciones', 'SubvencionController');
Route::resource('/frontend/tipos_cargos', 'TipoCargoController');
Route::resource('/frontend/tipos_contratos', 'TipoContratoController');
Route::resource('/frontend/tipos_documentos', 'TipoDocumentoController');
Route::resource('/frontend/tipos_funciones', 'TipoFuncionController');
Route::resource('/frontend/tipos_valores_monetarios', 'TipoValorMonetarioController');
Route::resource('/frontend/usuarios', 'UsuarioController');
Route::resource('/frontend/valores_monetarios', 'ValorMonetarioController');
Route::resource('/frontend/rbds', 'RbdController');
Route::resource('/frontend/establecimientos_rbds', 'EstablecimientoRbdController');
Route::resource('/frontend/trabajadores_rbds', 'TrabajadorRbdController');
Route::resource('/frontend/trabajadores', 'TrabajadorController');
Route::resource('/frontend/cargos_funciones', 'CargoFuncionController');






