@extends('layouts.admin')

@section('content')
    {!! Form::open(['route' => 'usuario.store', 'method' => 'post']) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del usuario']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el email del usuario']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa el password del usuario']) !!}
    </div>
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop