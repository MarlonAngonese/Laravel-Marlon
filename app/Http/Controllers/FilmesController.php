<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\FilmeAtor;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function create() {
        return view('filmes.create');
    }

    public function store(Request $request) {
        $filme = Filme::create([
            'nome' => $request->get('nome'),
            'categoria' => $request->get('categoria')
        ]);

        $atores = $request->atores;

        foreach ($atores as $a => $value) {
            FilmeAtor::create([
                'filme_id' => $filme->id,
                'ator_id' => $atores[$a]
            ]);
        }

        return redirect()->route('filmes');
    }
}
