<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['id','nome','cnpj','email','telefone'];

    //Pertence a muitos
    public function documentos() {
        return $this->hasMany(Documento::class, 'id', 'id');
    }
}
