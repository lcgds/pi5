<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Cliente;
use App\Models\tipodocumento;
use App\Models\Movimentacao;


class MovimentacaoController extends Controller {
    //Pagina Inicial
    public function index() {
        return view('movimentacao.index');//->with('movimentacao', Movimentacao::all());
    }
    //Criar Mov
    public function create() {
        return view('movimentacao.create');//->with(['documento' => documento::all(), 'users' => Users::all()]);
    }
    //Armazenar dados no banco
    public function store(Request $request) {
        movimentacao::create($request->all());
        session()->flash('success', 'A movimentação foi cadastrada.');
        //Redireciona a rota pra pagina inicial
        return redirect(route('movimentacao.index'));
    }

   // public
    //function read(Documento $documento) {
      //  return view('movimentacao.read')->with('movimentacao', $movimentacao);
    }



