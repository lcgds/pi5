<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipodedocumento extends Model
{
    use HasFactory;
    protected $fillable = ['id','nome','descricao'];
}
