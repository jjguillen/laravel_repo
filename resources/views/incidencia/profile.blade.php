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
</x-profile>
@endsection