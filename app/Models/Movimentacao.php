<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{

  
    
    use HasFactory;
    protected $table = 'movimentacao';
    protected $fillable = ['documentos_id', 'departamento_id', 'users_id', 'observacao'];


public function documento() {
    //  1 Movimentacao tem 1 Documento' 
    return $this->belongsTo(documento::class, 'documentos_id' /*FK na minha tabela*/,   'id' /*PK na tabela ' Documento'*/);
}

public function departamento() {
    // 1 Movimentação tem 1 'departamento' 
    return $this->belongsTo(departamento::class, 'departamentos_id' /*FK na minha tabela*/,   'id' /*PK na tabela Departamento'*/);
}

public function users() {
    // 1 Movimentação tem 1 'usuario' 
    return $this->belongsTo(User::class, 'users_id' /*FK na minha tabela*/,   'id' /*PK na tabela Usuario'*/);
}
}
