@extends('layouts.admin')

@section('content')
    @include('alerts.request')
    {!! Form::model($user, ['route' => ['usuario.update', $user->id], 'method' => 'put']) !!}
    @include('usuario.forms.user')
    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! Form::open(['route' => ['usuario.destroy', $user->id], 'method' => 'delete']) !!}
    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop