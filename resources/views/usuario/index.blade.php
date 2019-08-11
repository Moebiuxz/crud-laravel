@extends('layouts.admin')

<?php $message = Session::get('message');?>


@if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('message')}}</strong>
    </div>
@endif


@section('content')
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
@stop