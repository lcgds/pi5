<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tipodocumento;

class tipodocumentoController extends Controller
{
  //Pagina Inicial
  public function index(){
    return view('tipodocumento.index');
}
//Criar Documento
public function create(){
    return view('tipodocumento.create');
    }
//Armazenar dados no banco
    public function store(Request $request){
      tipodocumento::create($request->all());
      //Redireciona a rota pra pagina inicial
      return redirect(route('tipodocumento.index'));
        }

}
