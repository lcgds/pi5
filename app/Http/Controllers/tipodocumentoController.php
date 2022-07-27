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
        session()->flash('success', 'O Tipo de Documentado foi cadastrado.');
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
        session()->flash('success', 'Os dados do Tipo de Documento foram atualizados.');
        return redirect(route('tipodocumento.index'));
    }

    public
    function delete(tipodocumento $tipodocumento) {
        if ($tipodocumento->documentos->count() == 0) {
            session()->flash('warning', 'O Tipo de Documento selecionado possui documentos ativos. Portanto, não é possível deletá-lo.');
            return redirect(route('tipodocumento.index'));
        } else {
            $tipodocumento->delete();
            session()->flash('success', 'O Tipo de Documento foi deletado.');
            return redirect(route('tipodocumento.index'));
        }
    }

}
