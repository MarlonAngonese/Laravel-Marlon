<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NacionalidadeRequest;
use App\Models\Nacionalidade;

class NacionalidadesController extends Controller
{
    public function index()
    {
        $nacionalidades = Nacionalidade::orderBy('descricao')->paginate(5);
        return view('nacionalidades.index', ['nacionalidades' => $nacionalidades]);
    }

    public function create()
    {
        return view('nacionalidades.create');
    }

    public function store(NacionalidadeRequest $request)
    {
        $novo_nacionalidade = $request->all();
        Nacionalidade::create($novo_nacionalidade);

        return redirect()->route('nacionalidades');
    }

    public function edit($id)
    {
        $nacionalidade = Nacionalidade::find($id);

        return view('nacionalidades.edit', compact('nacionalidade'));
    }

    public function update(NacionalidadeRequest $request, $id)
    {
        Nacionalidade::find($id)->update($request->all());

        return redirect()->route('nacionalidades');
    }

    public function destroy($id) {
        try {
           Nacionalidade::find($id)->delete();
           $ret = ['status' => 200, 'msg' => 'null'];
        } catch (\Illuminate\Database\QueryException $e) {
           $ret = ['status' => 500, 'msg' => $e->getMessage()];
        } catch (\PDOException $e) {
           $ret = ['status' => 500, 'msg' => $e->getMessage()];
        }
  
        return $ret;
     }
}
