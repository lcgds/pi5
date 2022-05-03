<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    //Pagina Inicial
    public function index(){
        return view('documento.index');
    }
    //Criar Documento
    public function create(){
        return view('documento.create');
        }
    //Armazenar dados no banco
        public function store(Request $request){
          dd ($request->all());
            }

}
