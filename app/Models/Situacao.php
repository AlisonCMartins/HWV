<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacao extends Model{
    protected $table = 'situacoes';
    protected $fillable = ['id', 'descricao'];
}