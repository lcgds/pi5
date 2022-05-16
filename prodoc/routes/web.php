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

//Rotas index , criar e salvar no banco.
Route::get('/documento', [DocumentosController::class, 'index'])->name('documento.index');
Route::get('/documento/create', [DocumentosController::class,'create'])->name('documento.create');
Route::post('/documento/store', [DocumentosController::class,'store'])->name('documento.store');

//Rotas index , criar e salvar no banco.
Route::get('/funcionario', [FuncionarioController::class, 'index'])->name('funcionario.index');
Route::get('/funcionario/create', [FuncionarioController::class,'create'])->name('funcionario.create');
Route::post('/funcionario/store', [FuncionarioController::class,'store'])->name('funcionario.store');
Route::get('/funcionario/edit/{funcionario}', [FuncionarioController::class,'edit'])->name('funcionario.edit');
Route::post('/funcionario/update/{funcionario}', [FuncionarioController::class,'update'])->name('funcionario.update');


//Rotas index , criar e salvar no banco.
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class,'create'])->name('cliente.create');
Route::post('/cliente/store', [ClienteController::class,'store'])->name('cliente.store');
Route::get('/cliente/edit/{cliente}', [ClienteController::class,'edit'])->name('cliente.edit');
Route::post('/cliente/update/{cliente}', [ClienteController::class,'update'])->name('cliente.update');

//Rotas index , criar e salvar no banco.
Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::get('/departamento/create', [DepartamentoController::class,'create'])->name('departamento.create');
Route::post('/departamento/store', [DepartamentoController::class,'store'])->name('departamento.store');
Route::get('/departamento/edit/{departamento}', [DepartamentoController::class,'edit'])->name('departamento.edit');
Route::post('/departamento/update/{departamento}', [DepartamentoController::class,'update'])->name('departamento.update');

//Rotas index , criar e salvar no banco.
Route::get('/tipodocumento', [tipodocumentoController::class, 'index'])->name('tipodocumento.index');
Route::get('/tipodocumento/create', [tipodocumentoController::class,'create'])->name('tipodocumento.create');
Route::post('/tipodocumento/store', [tipodocumentoController::class,'store'])->name('tipodocumento.store');
Route::get('/tipodocumento/edit/{tipodocumento}', [tipodocumentoController::class,'edit'])->name('tipodocumento.edit');
Route::post('/tipodocumento/update/{tipodocumento}', [tipodocumentoController::class,'update'])->name('tipodocumento.update');