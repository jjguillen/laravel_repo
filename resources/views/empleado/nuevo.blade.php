@extends('layouts.app')

@section('title', $mensaje)
@section('active2', ' active')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/empleados" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" name="nombre" id="nombre" type="text" value="{{ old('nombre') }}">
    </div>

    <div class="form-group">
        <label for="longitud">Apellidos</label>
        <input class="form-control" name="apellidos" id="apellidos" type="text" value="{{ old('apellidos') }}">
    </div>

    <div class="form-group">
        <label for="ciudad">DNI</label>
        <input class="form-control" name="dni" id="dni" type="text" value="{{ old('dni') }}">
    </div>
    
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input class="form-control" name="direccion" id="direccion" type="text" value="{{ old('direccion') }}"> 
    </div>

    <div class="form-group">
        <label for="etiqueta">Ciudad</label>
        <input class="form-control" name="ciudad" id="ciudad" type="text" value="{{ old('ciudad') }}">
    </div>

    <div class="form-group">
        <label for="etiqueta">Cargo</label>
        <input class="form-control" name="cargo" id="cargo" type="text" value="{{ old('cargo') }}">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="erte" id="erte" value="1" >
        <label class="form-check-label" for="exampleRadios1">
            Está en Erte
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="erte" id="norete" value="0" checked>
        <label class="form-check-label" for="exampleRadios2">
            No está en Erte
        </label>
    </div>

    <input type="submit" value="Crear">
</form>

@endsection