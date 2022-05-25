<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    protected $table = "atores";
    protected $fillable = ['nome', 'nacionalidade_id', 'dt_nascimento', 'inicio_atividades'];

    protected function nacionalidade() {
        return $this->belongsTo("App\Models\Nacionalidade");
    }
}
