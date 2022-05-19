<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\tipodocumentoController;


require __DIR__.'/auth.php';

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', function () {
    return view('login');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/deslogado', function () {
    return view('deslogado');
})->middleware(['guest']);




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
	Route::get('/funcionario/edit/{funcionario}', [FuncionarioController::class,'edit'])->name('funcionario.edit');
	Route::post('/funcionario/update/{funcionario}', [FuncionarioController::class,'update'])->name('funcionario.update');
	Route::get('/funcionario/destroy/{funcionario}', [FuncionarioController::class,'destroy'])->name('funcionario.destroy');
	

	

	//Rotas index , criar e salvar no banco.
	Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
	Route::get('/cliente/create', [ClienteController::class,'create'])->name('cliente.create');
	Route::post('/cliente/store', [ClienteController::class,'store'])->name('cliente.store');
	Route::get('/cliente/edit/{cliente}', [ClienteController::class,'edit'])->name('cliente.edit');
	Route::post('/cliente/update/{cliente}', [ClienteController::class,'update'])->name('cliente.update');
	Route::get('/cliente/destroy/{cliente}', [ClienteController::class,'destroy'])->name('cliente.destroy');
	

	//Rotas index , criar e salvar no banco.
	Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
	Route::get('/departamento/create', [DepartamentoController::class,'create'])->name('departamento.create');
	Route::post('/departamento/store', [DepartamentoController::class,'store'])->name('departamento.store');
	Route::get('/departamento/edit/{departamento}', [DepartamentoController::class,'edit'])->name('departamento.edit');
	Route::post('/departamento/update/{departamento}', [DepartamentoController::class,'update'])->name('departamento.update');
	Route::get('/departamento/destroy/{departamento}', [DepartamentoController::class,'destroy'])->name('departamento.destroy');
	

	//Rotas index , criar e salvar no banco.
	Route::get('/tipodocumento', [tipodocumentoController::class, 'index'])->name('tipodocumento.index');
	Route::get('/tipodocumento/create', [tipodocumentoController::class,'create'])->name('tipodocumento.create');
	Route::post('/tipodocumento/store', [tipodocumentoController::class,'store'])->name('tipodocumento.store');
	Route::get('/tipodocumento/edit/{tipodocumento}', [tipodocumentoController::class,'edit'])->name('tipodocumento.edit');
	Route::post('/tipodocumento/update/{tipodocumento}', [tipodocumentoController::class,'update'])->name('tipodocumento.update');
	Route::get('/tipodocumento/destroy/{tipodocumento}', [tipodocumentoController::class,'destroy'])->name('tipodocumento.destroy');
