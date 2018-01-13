@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    {!! Form::open(['action' => ['UsersController@update', $Users->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('noabonado', 'Numero Abonado')}}
            {{Form::text('noabonado', $Users->noabonado, ['class' => 'form-control', 'placeholder' => 'Numero de Abonado'])}}

            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre', $Users->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre'])}}

            {{Form::label('apellido', 'Apellido')}}
            {{Form::text('apellido', $Users->apellido, ['class' => 'form-control', 'placeholder' => 'Apellido'])}}

            {{Form::label('noidentidad', 'Numero de Identidad')}}
            {{Form::text('noidentidad', $Users->noidentidad, ['class' => 'form-control', 'placeholder' => 'Numero de Identidad'])}}

            {{Form::label('telefono', 'Telefono')}}
            {{Form::text('telefono', $Users->telefono, ['class' => 'form-control', 'placeholder' => 'Telefono'])}}

            {{Form::label('tarifa', 'Tarifa')}}
            {{Form::text('tarifa', $Users->tarifa, ['class' => 'form-control', 'placeholder' => 'Tarifa'])}}

            {{Form::label('tipo', 'Tipo')}}
            {{Form::text('tipo', $Users->tipo, ['class' => 'form-control', 'placeholder' => 'Tipo'])}}

            {{Form::label('estadomora', 'Estado de Mora')}}
            {{Form::text('estadomora', $Users->estadomora, ['class' => 'form-control', 'placeholder' => 'Estado de Mora'])}}

            {{Form::label('tipoincidencia', 'Tipo de Incidencia')}}
            {{Form::text('tipoincidencia', $Users->tipoincidencia, ['class' => 'form-control', 'placeholder' => 'Tipo de Incidencia'])}}

            {{Form::label('barrio', 'Barrio')}}
            {{Form::textarea('barrio', $Users->barrio, ['class' => 'form-control', 'placeholder' => 'Barrio'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Guardar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection