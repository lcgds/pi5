<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipodedocumento;

class TipodedocumentoController extends Controller
{
      //Pagina Inicial
      public function index(){
        return view('tipodedocumento.index');
    }
    //Criar Documento
    public function create(){
        return view('tipodedocumento.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          tipodedocumento::create($request->all());
            }
}
