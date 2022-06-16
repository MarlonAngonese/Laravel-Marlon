<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmeAtor extends Model
{
    use HasFactory;

    protected $table = "filme_ators";
    protected $fillable = ['ator_id', 'filme_id'];
}
