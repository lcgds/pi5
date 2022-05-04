<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;

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
Route::get('/tipodedocumento', [TipodedocumentoController::class, 'index'])->name('tipodedocumento.index');
Route::get('/tipodedocumento/create', [TipodedocumentoController::class,'create'])->name('tipodedocumento.create');
Route::post('/tipodedocumento/store', [TipodedocumentoController::class,'store'])->name('tipodedocumento.store');