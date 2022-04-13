@extends('adminlte::page')

@section('content')
    <h3>Novo Ator</h3>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
        </div>
    {!! Form::close() !!}
@stop