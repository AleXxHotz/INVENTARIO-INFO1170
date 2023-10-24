<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Items;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/login', function () {
    return view('Login.login');
});
Route::get('/contraseña', function () {
    return view('Login.contraseña');
});
Route::get('/registro', function () {
    return view('Login.registro');
});
Route::get('/parte', function () {
    return view('Login.parte');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/proveedores', function () {
    return view('GestionProductos.proveedores');
});
Route::get('/calendario', function () {
    return view('Informacion.calendario');
});
Route::get('/ajustes', function () {
    return view('ajustes');
});
Route::get('/ayuda', function () {
    return view('Informacion.ayuda');
});
Route::get('/categorias', function () {
    return view('GestionProductos.categorias');
});
Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/entrada', function () {
    return view('GestionExistencias.entrada');
});
Route::get('/nosotros', function () {
    return view('Informacion.nosotros');
});
Route::get('/productos', [Items::class,'listarItems'])->name('productos.listar');

Route::get('/productos/agregar', [Items::class,'agregarItems'])->name('productos.agregar');

Route::post('/productos/agregar', [Items::class,'guardarItems'])->name('productos.guardar');

Route::get('/salida&factura', function () {
    return view('GestionExistencias.salida&factura');
});
Route::get('/terminos', function () {
    return view('Informacion.terminos');
});
