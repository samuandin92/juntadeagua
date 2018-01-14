@extends('layouts.app')

@section('content')
    <h1>Crear Usuario</h1>
    {!! Form::open(['action' => 'UsersController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('noabonado', 'Numero Abonado')}}
            {{Form::text('noabonado', '', ['class' => 'form-control', 'placeholder' => 'Numero de Abonado'])}}
            <br>
            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre'])}}
            <br>
            {{Form::label('apellido', 'Apellido')}}
            {{Form::text('apellido', '', ['class' => 'form-control', 'placeholder' => 'Apellido'])}}
            <br>
            {{Form::label('noidentidad', 'Numero de Identidad')}}
            {{Form::text('noidentidad', '', ['class' => 'form-control', 'placeholder' => 'Numero de Identidad'])}}
            <br>
            {{Form::label('telefono', 'Telefono')}}
            {{Form::text('telefono', '', ['class' => 'form-control', 'placeholder' => 'Telefono'])}}
            <br>
            {{Form::label('tarifa', 'Tarifa')}}
            {{Form::text('tarifa', '', ['class' => 'form-control', 'placeholder' => 'Tarifa'])}}
            <br>
            {{Form::label('tipo', 'Tipo')}}
            {{Form::text('tipo', '', ['class' => 'form-control', 'placeholder' => 'Tipo'])}}
            <br>
            {{Form::label('estadomora', 'Estado de Mora')}}
            {{Form::text('estadomora', '', ['class' => 'form-control', 'placeholder' => 'Estado de Mora'])}}
            <br>
            {{Form::label('tipoincidencia', 'Tipo de Incidencia')}}
            {{Form::text('tipoincidencia', '', ['class' => 'form-control', 'placeholder' => 'Tipo de Incidencia'])}}
            <br>
            {{Form::label('barrio', 'Barrio')}}
            {{Form::textarea('barrio', '', ['class' => 'form-control', 'placeholder' => 'Barrio'])}}
        </div>
        {{Form::submit('Guardar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection