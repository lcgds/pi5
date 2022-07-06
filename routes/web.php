<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\tipodocumentoController;
use App\Http\Controllers\MovimentacaoController;


require __DIR__.'/auth.php';

// Se o usuário não estiver autenticado
Route::middleware('guest')->group(function () {

	Route::get('/', function () {
		return view('auth.login');
	})->name('welcome');

	/*Route::get('/login', function () {
		return view('auth.login');
	})->name('login');*/
	
});

// Se o usuário estiver autenticado
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
	
	Route::get('/pesquisa', function () {
		session()->flash('warning', 'Página em desenvolvimento. A função de busca ainda não foi implementada.');
		return view('search');
	})->name('search');


	// CRUD Documento
	Route::get('/documento', [DocumentosController::class, 'index'])->name('documento.index');
	Route::get('/documento/create', [DocumentosController::class,'create'])->name('documento.create');
	Route::post('/documento/store', [DocumentosController::class,'store'])->name('documento.store');
	Route::get('/documento/edit/{documento}', [DocumentosController::class,'edit'])->name('documento.edit');
	Route::get('/documento/read/{documento}', [DocumentosController::class,'read'])->name('documento.read');
	Route::post('/documento/update/{documento}', [DocumentosController::class,'update'])->name('documento.update');
	//Route::get('/documento/destroy/{documento}', [DocumentosController::class,'destroy'])->name('documento.destroy');
	Route::get('/documento/delete/{documento}', [DocumentosController::class,'delete'])->name('documento.delete');


	// CRUD Funcionário
	Route::get('/funcionario', [FuncionarioController::class, 'index'])->name('funcionario.index');
	Route::get('/funcionario/create', [FuncionarioController::class,'create'])->name('funcionario.create');
	Route::post('/funcionario/store', [FuncionarioController::class,'store'])->name('funcionario.store');
	Route::get('/funcionario/edit/{funcionario}', [FuncionarioController::class,'edit'])->name('funcionario.edit');
	Route::post('/funcionario/update/{funcionario}', [FuncionarioController::class,'update'])->name('funcionario.update');
	Route::get('/funcionario/destroy/{funcionario}', [FuncionarioController::class,'destroy'])->name('funcionario.destroy');
	

	// CRUD Cliente
	Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
	Route::get('/cliente/create', [ClienteController::class,'create'])->name('cliente.create');
	Route::post('/cliente/store', [ClienteController::class,'store'])->name('cliente.store');
	Route::get('/cliente/read/{cliente}', [ClienteController::class,'read'])->name('cliente.read');
	Route::get('/cliente/edit/{cliente}', [ClienteController::class,'edit'])->name('cliente.edit');
	Route::post('/cliente/update/{cliente}', [ClienteController::class,'update'])->name('cliente.update');
	//Route::get('/cliente/destroy/{cliente}', [ClienteController::class,'destroy'])->name('cliente.destroy');
	Route::get('/cliente/delete/{cliente}', [ClienteController::class,'delete'])->name('cliente.delete');
	

	// CRUD Departamento
	Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
	Route::get('/departamento/create', [DepartamentoController::class,'create'])->name('departamento.create');
	Route::post('/departamento/store', [DepartamentoController::class,'store'])->name('departamento.store');
	Route::get('/departamento/read/{departamento}', [DepartamentoController::class,'read'])->name('departamento.read');
	Route::get('/departamento/edit/{departamento}', [DepartamentoController::class,'edit'])->name('departamento.edit');
	Route::post('/departamento/update/{departamento}', [DepartamentoController::class,'update'])->name('departamento.update');
	//Route::get('/departamento/destroy/{departamento}', [DepartamentoController::class,'destroy'])->name('departamento.destroy');
	Route::get('/departamento/delete/{departamento}', [DepartamentoController::class,'delete'])->name('departamento.delete');
	

	// CRUD Tipo de Documento
	Route::get('/tipodocumento', [tipodocumentoController::class, 'index'])->name('tipodocumento.index');
	Route::get('/tipodocumento/create', [tipodocumentoController::class,'create'])->name('tipodocumento.create');
	Route::post('/tipodocumento/store', [tipodocumentoController::class,'store'])->name('tipodocumento.store');
	Route::get('/tipodocumento/read/{tipodocumento}', [tipodocumentoController::class,'read'])->name('tipodocumento.read');
	Route::get('/tipodocumento/edit/{tipodocumento}', [tipodocumentoController::class,'edit'])->name('tipodocumento.edit');
	Route::post('/tipodocumento/update/{tipodocumento}', [tipodocumentoController::class,'update'])->name('tipodocumento.update');
	//Route::get('/tipodocumento/destroy/{tipodocumento}', [tipodocumentoController::class,'destroy'])->name('tipodocumento.destroy');
	Route::get('/tipodocumento/delete/{tipodocumento}', [tipodocumentoController::class,'delete'])->name('tipodocumento.delete');

	// CRUD Movimentação
	Route::get('/movimentacao', [MovimentacaoController::class, 'index'])->name('movimentacao.index');
	Route::get('/movimentacao/create', [MovimentacaoController::class,'create'])->name('movimentacao.create');
	Route::post('/movimentacao/store', [MovimentacaoController::class,'store'])->name('movimentacao.store');
	//Route::get('/movimentacao/read/{movimentacao}', [MovimentacaoController::class,'read'])->name('movimentacao.read');


});

