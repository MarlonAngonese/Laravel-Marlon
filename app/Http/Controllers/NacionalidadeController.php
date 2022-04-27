<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNacionalidadeRequest;
use App\Http\Requests\UpdateNacionalidadeRequest;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNacionalidadeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNacionalidadeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nacionalidade  $nacionalidade
     * @return \Illuminate\Http\Response
     */
    public function show(Nacionalidade $nacionalidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nacionalidade  $nacionalidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Nacionalidade $nacionalidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNacionalidadeRequest  $request
     * @param  \App\Models\Nacionalidade  $nacionalidade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNacionalidadeRequest $request, Nacionalidade $nacionalidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nacionalidade  $nacionalidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nacionalidade $nacionalidade)
    {
        //
    }
}
