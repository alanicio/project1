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
    return view('auth.login');
});

Route::get('/cliente', function(){
	return view('auth.cliente');
});

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/principal',function(){
	return view('/welcome');
})->name('inicio');

Route::resource('empleados','Empleado\EmpleadoController');

Route::resource('proveedores','Proveedor\ProveedorController');

Route::post('status/{id}','Pedido\PedidoController@statusUpdate');
Route::post('guia/{id}','Pedido\PedidoController@guiaStore');
Route::post('clienteData','Pedido\PedidoController@clientePedido');

Route::get('pedidos/{id}/archivos','Pedido\PedidoController@archivoCreate');
Route::post('pedidos/{id}/storeArchivos','Pedido\PedidoController@archivoStore');
Route::post('pedidos/{id}/storeData','Pedido\PedidoController@dataStore');
Route::get('pedidos/selected/{id}','Pedido\PedidoController@pedidoSelected');

Route::get('pedidos/finalizados','Pedido\PedidoController@finalizadosIndex')->name('pedidos_finalizados');
Route::resource('pedidos','Pedido\PedidoController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
