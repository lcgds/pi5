<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipoDocumento;

class tipoDocumentoController extends Controller
{
     //Pagina Inicial
     public function index(){
        return view('tipoDocumento.index');
    }
    //Criar Documento
    public function create(){
        return view('tipoDocumento.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          tipoDocumento::create($request->all());
            }
}
