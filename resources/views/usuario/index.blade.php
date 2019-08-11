@extends('layouts.admin')

<?php $message = Session::get('message');?>
@if ($message == 'store')
    <div class="alert alert-success" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Usuario creado exitosamente!</strong>
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
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop