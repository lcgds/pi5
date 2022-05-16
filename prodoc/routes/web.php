<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\tipodocumentoController;

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
    return view('login');
});

Route::get('/pesquisa', function () {
    return view('pesquisa');
});

Route::get('/tipoDocumentoLuiz', function () {
    return view('tipoDocumento_create');
})->name('tdLuiz');

//Rotas index , criar e salvar no banco.
Route::get('/documento', [DocumentosController::class, 'index'])->name('documento.index');
Route::get('/documento/create', [DocumentosController::class,'create'])->name('documento.create');
Route::post('/documento/store', [DocumentosController::class,'store'])->name('documento.store');

//Rotas index , criar e salvar no banco.
Route::get('/funcionario', [FuncionarioController::class, 'index'])->name('funcionario.index');
Route::get('/funcionario/create', [FuncionarioController::class,'create'])->name('funcionario.create');
Route::post('/funcionario/store', [FuncionarioController::class,'store'])->name('funcionario.store');

//Rotas index , criar e salvar no banco.
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class,'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class,'store'])->name('cliente.store');

//Rotas index , criar e salvar no banco.
Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::get('/departamento/create', [DepartamentoController::class,'create'])->name('departamento.create');
Route::post('/departamento/store', [DepartamentoController::class,'store'])->name('departamento.store');

//Rotas index , criar e salvar no banco.
Route::get('/tipodocumento', [tipodocumentoController::class, 'index'])->name('tipodocumento.index');
Route::get('/tipodocumento/create', [tipodocumentoController::class,'create'])->name('tipodocumento.create');
Route::post('/tipodocumento/store', [tipodocumentoController::class,'store'])->name('tipodocumento.store');