@extends('adminlte::page')

@section('content')
    <h3>Novo Ator</h3>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
            {!! Form::select('nacionalidade', [
                'BRA' => 'Brasileiro',
                'USA' => 'Americano',
                'CAN' => 'Canadense',
                'ARG' => 'Argentino',
                'BRA',
                ['class' => 'form-control', 'required']
            ]) !!}
        </div>
    {!! Form::close() !!}
@stop