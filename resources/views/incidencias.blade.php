@extends('layouts.app')

@section('title', 'Incidencias')
@section('active1', 'active')
@section('contador', $contador)
@section('content')

    <div>
        <a href="/incidencias/create"><button type="button" class="btn btn-primary">Nueva</button></a>
    </div>

    <table class='table'>
        <tr>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Estado</th>
            <th>Nivel</th>
            <th>Empleado R.</th>
            <th>Acciones</th>
        </tr>
        @each('incidencia.show', $incidencias, 'incidencia')
    </table>    

    <div>{{ $incidencias->links() }}</div>
    

@endsection



