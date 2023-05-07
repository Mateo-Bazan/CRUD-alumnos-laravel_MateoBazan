<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="my-2">Alumnos registrados</h4>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Contacto</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumno as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellido }}</td>
                <td>{{ $alumno->dni }}</td>
                <td>{{ $alumno->edad }}</td>
                <td>{{ $alumno->contacto }}</td>
                <td class="d-flex justify-content-between">
                    <a href="{{ url('/alumnos/'.$alumno->id.'/edit') }}" class="btn btn-primary">Editar</a>
                    <form action="{{ url('/alumnos/'.$alumno->id) }}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Seguro de borrar?')" class="btn btn-danger" value="Borar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/alumnos/create') }}" class="btn btn-success">Crear nuevo alumno</a>
    </div>
@endsection
</body>
</html>