@extends('layouts.app')

@section('content')
    <h3>Asistentes que pueden resolver la incidencia {{ $incidencia }}</h3>
    <table class='table'>
            <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>DNI</th>
            <th>Puesto</th>
            <th>Selecciona</th>
            </tr>
        @foreach($asistentes as $asistente)
            <tr>
                <td>{{ $asistente->nombre }}</td>
                <td>{{ $asistente->apellidos }}</td>
                <td>{{ $asistente->dni }}</td>
                <td>{{ $asistente->puesto }}</td>
                <td>
                    <a href="/incidencias/{{ $incidencia }}/asignarasistente/{{ $asistente->id }}"><i class="fas fa-binoculars"></i></a>
                </td>         
            </tr>
        @endforeach
    </table>
@endsection