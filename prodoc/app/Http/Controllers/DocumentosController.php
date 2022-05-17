<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentosController extends Controller
{
    //Pagina Inicial
    public function index(){
        return view('documento.index')->with('documentos', Documento::all());
    }
    //Criar Documento
    public function create(){
        return view('documento.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          documento::create($request->all());
   // session()->flash('success', 'documento cadastrado com sucesso!');
          //Redireciona a rota pra pagina inicial
          return redirect(route('documento.index'));
            }

}
