<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\tipodocumento;


class DocumentosController extends Controller {
    //Pagina Inicial
    public
    function index() {
        return view('documento.index')->with('documentos', Documento::all());
    }
    //Criar Documento
    public
    function create() {
        return view('documento.create')->with('tipodocumentos', tipodocumento::all());
    }
    //Armazenar dados no banco
    public
    function store(Request $request) {
        documento::create($request->all());
        session()->flash('success', 'O Documento foi cadastrado.');
        //Redireciona a rota pra pagina inicial
        return redirect(route('documento.index'));
    }

    public
    function edit(Documento $documento) {
        return view('documento.edit')->with(['documento' => $documento, 'tipodocumentos' => tipodocumento::all()]);
    }

    public
    function update(Request $request, Documento $documento) {
        $documento->update($request->all());
        session()->flash('success', 'Os dados do Documento foram atualizados.');
        return redirect(route('documento.index'));
    }

    public
    function destroy(Documento $documento) {
        $documento->delete();
        session()->flash('success', 'O Documento selecionado foi deletado.');
        return redirect(route('documento.index'));

    }


}
