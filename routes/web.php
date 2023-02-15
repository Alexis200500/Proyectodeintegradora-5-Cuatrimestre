<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;

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

//proyecto
Route::get('login',[AccesoController::class,'login'])->name('login');
Route::POST('/valida',[AccesoController::class,'valida'])->name('valida');
Route::get('recuperar',[AccesoController::class,'recuperar'])->name('recuperar');
Route::post('restaurar', [AccesoController::class,'restaurar'])->name('restaurar');

Route::get('/cerrarsesion',[AccesoController::class,'cerrarsesion'])->name('cerrarsesion');
Route::get('/principal',[AccesoController::class,'principal'])->name('principal');

  Route::get('/clear-cache', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        return 'FINISHED';
    });

Route::name('/')->get('/',[InicioController::class,'INDEX']);


Route::name('consultausu')->get('/consultausu',[UsuariosController::class,'consultausu']);
Route::name('consultausu2')->get('/consultausu2/{idusuario}',[UsuariosController::class,'consultausu2']);

Route::name('altausu')->get('/altausu',[UsuariosController::class,'altausu']);
Route::name('nuevo')->post('/nuevo',[UsuariosController::class,'nuevousuario']);

Route::name('modificausu')->get('/modificausu/{idusuario}/editar',[UsuariosController::class,'editarusu']);
Route::name('modificausu2')->put('/modificausu2/{idusuario}',[UsuariosController::class,'updateusu']);
Route::name('eliminausu')->delete('/eliminausu/{idusuario}',[UsuariosController::class,'deleteusu']);

//*******************+ Cliente

Route::name('consultacli')->get('/consultacli',[ClientesController::class,'consultacli']);
Route::name('consultacli2')->get('/consultacli2/{id}',[ClientesController::class,'consultacli2']);

Route::name('altacli')->get('/altacli',[ClientesController::class,'altacli']);
Route::name('nuevocli')->post('/nuevocli',[ClientesController::class,'nuevoCliente']);

Route::name('modificacli')->get('/modificacli/{id}/editar',[ClientesController::class,'editarcli']);
Route::name('modificacli2')->put('/modificacli2/{id}',[ClientesController::class,'updatecli']);
Route::name('eliminacli')->delete('/eliminacli/{id}',[ClientesController::class,'deletecli']);

//*********************** Empleados

Route::name('consultaemp')->get('/consultaemp',[EmpleadosController::class,'consultaemp']);
Route::name('consultaemp2')->get('/consultaemp2/{idemp}',[EmpleadosController::class,'consultaemp2']);

Route::name('altaemp')->get('/altaemp',[EmpleadosController::class,'altaemp']);
Route::name('nuevoemp')->post('/nuevoemp',[EmpleadosController::class,'nuevoEmpleado']);

Route::name('modificaemp')->get('/modificaemp/{idemp}/editar',[EmpleadosController::class,'editaremp']);
Route::name('modificaemp2')->put('/modificaemp2/{idemp}',[EmpleadosController::class,'updateemp']);
Route::name('eliminaemp')->delete('/eliminaemp/{idemp}',[EmpleadosController::class,'deleteemp']);

//************************ Productos

Route::name('consultapro')->get('/consultapro',[ProductosController::class,'consultapro']);
Route::name('consultapro2')->get('/consultapro2/{id}',[ProductosController::class,'consultapro2']);

Route::name('altapro')->get('/altapro',[ProductosController::class,'altapro']);
Route::name('nuevopro')->post('/nuevopro',[ProductosController::class,'nuevoProducto']);

Route::name('modificapro')->get('/modificapro/{id}/editar',[ProductosController::class,'editarpro']);
Route::name('modificapro2')->put('/modificapro2/{id}',[ProductosController::class,'updatepro']);
Route::name('eliminapro')->delete('/eliminapro/{id}',[ProductosController::class,'deletepro']);

//*********************** Ventas

Route::name('consultaven')->get('/consultaven',[VentasController::class,'consultaven']);
Route::name('consultaven2')->get('/consultaven2/{id}',[VentasController::class,'consultaven2']);

Route::name('altaven')->get('/altaven',[VentasController::class,'altaven']);
Route::name('nuevoven')->post('/nuevoven',[VentasController::class,'nuevoVenta']);

Route::name('modificaven')->get('/modificaven/{id}/editar',[VentasController::class,'editarven']);
Route::name('modificaven2')->put('/modificaven2/{id}',[VentasController::class,'updateemp']);
Route::name('eliminaven')->delete('/eliminaven/{id}',[VentasController::class,'deleteven']);

// PDF Y EXCEL Usuarios ///
Route::get('pdfusuarios', [UsuariosController::class,'pdfusuarios'])->name('pdfusuarios');
Route::get('excelusuarios', [UsuariosController::class,'excelusuarios'])->name('excelusuarios');


// PDF Y EXCEL DE clientes ///
Route::get('pdfclientes', [ClientesController::class,'pdfclientes'])->name('pdfclientes');
Route::get('excelclientes', [ClientesController::class,'excelclientes'])->name('excelclientes');


/// PDF Y EXCEL de empleados ///
Route::get('pdfempleados', [EmpleadosController::class,'pdfempleados'])->name('pdfempleados');
Route::get('excelempleados', [EmpleadosController::class,'excelempleados'])->name('excelempleados');


/// PDF y EXCEL de productos //
Route::get('pdfproductos', [ProductosController::class,'pdfproductos'])->name('pdfproductos');
Route::get('excelproductos', [ProductosController::class,'excelproductos'])->name('excelproductos');


/// PDF Y EXCEL de ventas //
Route::get('pdfventas', [VentasController::class,'pdfventas'])->name('pdfventas');
Route::get('excelventas', [VentasController::class,'excelventas'])->name('excelventas');
