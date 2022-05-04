<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

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
          documento::create($request->all());
            }

}
