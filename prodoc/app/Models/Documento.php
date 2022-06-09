<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable = ['id','descricao', 'tipodocumentos_id', 'clientes_id'];

    public function tipodocumento() {
        // 1 'Tipo de Documento' pertence ao 'Documento' 
        return $this->belongsTo(tipodocumento::class, 'tipodocumentos_id' /*FK na minha tabela*/,   'id' /*PK na tabela 'Tipo de Documento'*/);
    }

    public function cliente() {
        // 1 'Cliente' pertence ao 'Documento' 
        return $this->belongsTo(Cliente::class, 'clientes_id' /*FK na minha tabela*/,   'id' /*PK na tabela 'Cliente'*/);
    }
}
