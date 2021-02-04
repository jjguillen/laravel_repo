@extends('layouts.app')

@section('content')
<x-profile title='Incidencia'>
    <p>{{ $incidencia->latitud }} </p>
    <p>{{ $incidencia->longitud }}</p>
    <p>{{ $incidencia->direccion }}</p>
    <p>{{ $incidencia->estado }}</p>
    <p>{{ $incidencia->nivel }}</p>
    @if (isset($incidencia->empleado))
        <p>{{ $incidencia->empleado->nombre }}</p>
    @else
        <a href="/empleados/asignar/{{ $incidencia->id }}">
            <button type="button" class="btn btn-primary">Asignar empleado</button>
        </a>
    @endif

    <h3>Asistentes en la incidencia</h3>
    <ul>
    @foreach( $incidencia->asistentes as $asistente)
        <li>{{ $asistente->nombre }} {{ $asistente->apellidos }}</li>
    @endforeach
    </ul>

    <a href="/incidencias/asignarasistente/{{ $incidencia->id }}">
        <button type="button" class="btn btn-primary">Asignar asistente</button>
    </a>
</x-profile>
@endsection