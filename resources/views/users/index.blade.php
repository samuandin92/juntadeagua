@extends('layouts.app')

@section('content')
    <h1>Usuarios</h1>
    <table class="table table-striped table-bordered table-hover table-condensed">
            <tr>
                <th>Numero de Abonado</th>
                <th>Nombre</th> 
                <th>Apellido</th>
                <th>Numero de Identidad</th>
                <th>Telefono</th>
                <th>Tarifa</th>
                <th>Tipo</th>
                <th>Estado de Mora</th>
                <th>Tipo de Incidencia</th>
                <th>Barrio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        @if(count($Users) > 0)
            @foreach($Users as $user)           
                <tr>
                    <td>{{$user->noabonado}}</td>
                    <td>{{$user->nombre}}</td> 
                    <td>{{$user->apellido}}</td>
                    <td>{{$user->noidentidad}}</td>
                    <td>{{$user->telefono}}</td>
                    <td>{{$user->tarifa}}</td>
                    <td>{{$user->tipo}}</td>
                    <td>{{$user->estadomora}}</td>
                    <td>{{$user->tipoincidencia}}</td>
                    <td>{{$user->barrio}}</td>
                    <td><a href="/users/{{$user->id}}/edit" class="btn btn-default">Editar</a></td>
                    <td>{!!Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Eliminar', ['class' => 'btn btn-danger'])}}
                        {!!Form::Close()!!}<td>
                </tr>
            @endforeach
        @else
            <p>No hay usuarios registrados</p> 
        @endif
    </table>
@endsection