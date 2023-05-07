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
<a href="{{ url('/alumnos') }}" class="btn btn-secondary"><- Regresar</a>
    <h4 class="h4 my-2">Ingresar nuevo alumno</h4>

    <form action="{{ url('/alumnos') }}" method="post">
        @csrf 
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <br>
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control">
        <br>
        <label for="DNI" class="form-label">DNI</label>
        <input type="text" name="DNI" id="DNI" class="form-control">
        <br>
        <label for="edad" class="form-label">Edad</label>
        <input type="text" name="edad" id="edad" class="form-control">
        <br>
        <label for="contacto" class="form-label">Contacto</label>
        <input type="text" name="contacto" id="contacto" class="form-control">
        <br>

        <input type="submit" onclick="return confirm('¿Registrar alumno?')" class="btn btn-success" value="GUARDAR">

    </form>

    </div>
@endsection
</body>
</html>