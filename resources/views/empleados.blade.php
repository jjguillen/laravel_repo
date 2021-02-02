@extends('layouts.app')

@section('title', 'Empleados')
@section('active2', ' active')

@section('content')


    <div>
        <a href="/empleados/create"><button type="button" class="btn btn-primary">Nuevo</button></a>
    </div>

    <table class='table'>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Dni</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Cargo</th>
            <th>Erte</th>
            <th>Acciones</th>
        </tr>
        
        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellidos }}</td>
                <td>{{ $empleado->dni }}</td>
                <td>{{ $empleado->direccion }}</td>
                <td>{{ $empleado->ciudad }}</td>
                <td>{{ $empleado->cargo }}</td>
                <td>
                    @if ($empleado->erte)
                        SI
                    @else
                        NO
                    @endif
                </td>
                <td>
                    <a href="/empleados/{{ $empleado->id }}/delete"><i class="fas fa-trash-alt"></i></a>
                    <a href="/empleados/{{ $empleado->id }}/edit"><i class="far fa-edit"></i></a>
                    <a href="/empleados/{{ $empleado->id }}"><i class="fas fa-binoculars"></i></a>
                    
                </td>
            </tr>
        @endforeach

    </table> 

     <div>{{ $empleados->links() }}</div>

@endsection