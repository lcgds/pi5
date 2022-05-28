<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipodocumento;

class tipodocumentoController extends Controller {
    //Pagina Inicial
    public
    function index() {
        return view('tipodocumento.index')->with('tipodocumentos', tipodocumento::all());
    }
    //Criar Documento
    public
    function create() {
        return view('tipodocumento.create');
    }
    //Armazenar dados no banco
    public
    function store(Request $request) {
        tipodocumento::create($request->all());
        //Redireciona a rota pra pagina inicial
        return redirect(route('tipodocumento.index'));
    }

    public
    function read(tipodocumento $tipodocumento) {
        return view('tipodocumento.read')->with('tipodocumento', $tipodocumento);
    }

    public
    function edit(tipodocumento $tipodocumento) {
        return view('tipodocumento.edit')->with('tipodocumento', $tipodocumento);
    }

    public
    function update(Request $request, tipodocumento $tipodocumento) {
        $tipodocumento->update($request->all());
        session()->flash('success', 'tipo documento alterado com sucesso!');
        return redirect(route('tipodocumento.index'));
    }

    public
    function destroy(tipodocumento $tipodocumento) {
        $tipodocumento->delete();
        session()->flash('success', 'tipo documento apagado com sucesso!');
        return redirect(route('tipodocumento.index'));

    }

}
