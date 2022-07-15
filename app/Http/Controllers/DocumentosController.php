<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Cliente;
use App\Models\tipodocumento;
use App\Models\Movimentacao;



class DocumentosController extends Controller {
    //Pagina Inicial
    public
    function index() {
        return view('documento.index')->with('documentos', Documento::all());
    }
    //Criar Documento
    public
    function create() {
        return view('documento.create')->with(['tipodocumento' => tipodocumento::all(), 'cliente' => Cliente::all()]);
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
    function read(Documento $documento) {
        return view('documento.read')->with(['documento' => $documento, 'movimentacoes' => Movimentacao::all()]);
    }

    public
    function edit(Documento $documento) {
        return view('documento.edit')->with(['documento' => $documento, 'tipodocumento' => tipodocumento::all(), 'cliente' => Cliente::all()]);
    }

    public
    function update(Request $request, Documento $documento) {
        $documento->update($request->all());
        session()->flash('success', 'Os dados do Documento foram atualizados.');
        return redirect(route('documento.index'));
    }

    public
    function delete(Documento $documento) {
        $documento->delete();
        session()->flash('success', 'O Documento selecionado foi deletado.');
        return redirect(route('documento.index'));

    }

    public function forward(Documento $documento) {
        return view('documento.forward')->with('documento', $documento);
    }

    public
    function send(Request $request, Documento $documento) {
        //$documento->update($request->all());
        session()->flash('success', 'O envio do Documento foi registrado.');
        return redirect(route('documento.index'));
    }

    public 
    function search(){
        $search_text = $_GET['pesquisa'];
        $documentos = Documento::where('id', 'LIKE', '%' .$search_text. '%')->get();

        if ( $documentos->count() == 0){
            session()->flash('warning', 'Documento não localizado. Verifique o número do documento..');
            return view('documento.search', compact('documentos'));
        }else{
            return view('documento.search', compact('documentos'));
        }
    }
}
