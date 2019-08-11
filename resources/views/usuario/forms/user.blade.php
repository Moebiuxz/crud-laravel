<div class="form-group">
    {!! Form::label('nombre', 'Nombre:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del usuario']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el email del usuario']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa el password del usuario']) !!}
</div>