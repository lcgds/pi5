<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller {
    //Pagina Inicial
    public
    function index() {
        return view('funcionario.index')->with('funcionarios', Funcionario::all());
    }
    //Criar Documento
    public
    function create() {
        return view('funcionario.create');
    }
    //Armazenar dados no banco
    public
    function store(Request $request) {
        funcionario::create($request->all());
        session()->flash('success', 'O Funcionário foi cadastrado.');
        //Redireciona a rota pra pagina inicial
        return redirect(route('funcionario.index'));
    }
    public
    function edit(Funcionario $funcionario) {
        return view('funcionario.edit')->with('funcionario', $funcionario);
    }

    public
    function update(Request $request, Funcionario $funcionario) {
        $funcionario->update($request->all());
        session()->flash('success', 'Os dados do Funcionário foram atualizados.');
        return redirect(route('funcionario.index'));
    }

    public
    function destroy(Funcionario $funcionario) {
        $funcionario->delete();
        session()->flash('success', 'O Funcionário selecionado foi deletado.');
        return redirect(route('funcionario.index'));

    }




}
