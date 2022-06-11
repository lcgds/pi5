<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller {
    //Pagina Inicial
    public
    function index() {
        return view('departamento.index')->with('departamentos', Departamento::all());
    }
    //Criar Departamento
    public
    function create() {
        return view('departamento.create');
    }
    //Armazenar dados no banco
    public
    function store(Request $request) {
        departamento::create($request->all());
        session()->flash('success', 'O Departamento foi cadastrado.');
        //Redireciona a rota pra pagina inicial
        return redirect(route('departamento.index'));
    }

    public
    function read(Departamento $departamento) {
        return view('departamento.read')->with('departamento', $departamento);
    }

    public
    function edit(Departamento $departamento) {
        return view('departamento.edit')->with('departamento', $departamento);
    }

    public
    function update(Request $request, Departamento $departamento) {
        $departamento->update($request->all());
        session()->flash('success', 'Os dados do Departamento foram atualizados.');
        return redirect(route('departamento.index'));
    }

    public
    function destroy(Departamento $departamento) {
        $departamento->delete();
        session()->flash('success', 'O Departamento selecionado foi deletado.');
        return redirect(route('departamento.index'));

    }
}
