@extends('layouts.app')

@section('title', 'Seleccionar empleado para incidencia '.$incidencia)
@section('active2', ' active')

@section('content')

        <table class='table'>
            <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Ciudad</th>
            <th>Cargo</th>
            <th>Selecciona</th>
            </tr>
        @foreach($empleados as $empleado)
            <tr>
                @if (!$empleado->erte)
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellidos }}</td>
                    <td>{{ $empleado->ciudad }}</td>
                    <td>{{ $empleado->cargo }}</td>
                    <td>
                        <a href="/empleados/{{ $empleado->id }}/asignar/{{ $incidencia }}"><i class="fas fa-binoculars"></i></a>
                    </td>
                @endif
               
            </tr>
        @endforeach
        </table>
@endsection

