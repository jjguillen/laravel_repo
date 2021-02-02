@extends('layouts.app')

@section('content')
<x-profile title='Empleado'>
    <p>{{ $empleado->nombre }}</p> 
    <p>{{ $empleado->apellidos }}</p>
    <p>{{ $empleado->dni }}</p>
    <p>{{ $empleado->cargo }}</p>
    <p><a href="/empleados/{{ $empleado->id }}/cerradas">Incidencias cerradas por este empleado</a></p>
</x-profile>
@endsection