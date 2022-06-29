<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller {
    //Pagina Inicial
    public
    function index() {
        return view('cliente.index')->with('clientes', Cliente::all());
    }
    //Criar Documento
    public
    function create() {
        return view('cliente.create');
    }
    //Armazenar dados no banco
    public
    function store(Request $request) {
        cliente::create($request->all());
        session()->flash('success', 'O Cliente foi cadastrado.');
        //Redireciona a rota pra pagina inicial
        return redirect(route('cliente.index'));
    }

    public
    function read(Cliente $cliente) {
        return view('cliente.read')->with('cliente', $cliente);
    }

    public
    function edit(Cliente $cliente) {
        return view('cliente.edit')->with('cliente', $cliente);
    }

    public
    function update(Request $request, Cliente $cliente) {
        $cliente->update($request->all());
        session()->flash('success', 'Os dados do Cliente foram atualizados.');
        return redirect(route('cliente.index'));
    }

    public
    function delete(Cliente $cliente) {
        if($cliente->documentos->count() > 0) {
            session()->flash('warning', 'O Cliente selecionado possui documentos ativos. Portanto, não é possível deletá-lo.');
            return redirect(route('cliente.index'));
        } else {
            $cliente->delete();
            session()->flash('success', 'O Cliente selecionado foi deletado.');
            return redirect(route('cliente.index'));
        }
    }
}
