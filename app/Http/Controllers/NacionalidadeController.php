<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NacionalidadeRequest;
use App\Models\Nacionalidade;

class NacionalidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nacionalidades = Nacionalidade::orderBy('descricao')->paginate(5);
        return view('nacionalidades.index', ['nacionalidades' => $nacionalidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nacionalidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNacionalidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NacionalidadeRequest $request)
    {
        $novo_nacionalidade = $request->all();
        Nacionalidade::create($novo_nacionalidade);

        return redirect()->route('nacionalidades');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nacionalidade  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nacionalidade = Nacionalidade::find($id);

        return view('nacionalidades.edit', compact('nacionalidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNacionalidadeRequest  $request
     * @param  \App\Models\Nacionalidade  $nacionalidade
     * @return \Illuminate\Http\Response
     */
    public function update(NacionalidadeRequest $request, $id)
    {
        Nacionalidade::find($id)->update($request->all());

        return redirect()->route('nacionalidade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nacionalidade  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nacionalidade::find($id)->delete();

        return redirect()->route('nacionalidades');
    }
}
