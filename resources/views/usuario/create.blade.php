@extends('layouts.admin')

@section('content')
    @include('alerts.request')
    {!! Form::open(['route' => 'usuario.store', 'method' => 'post']) !!}
        @include('usuario.forms.user')
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop