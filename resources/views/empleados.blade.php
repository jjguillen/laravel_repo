<h1>EMPLEADOS</h1>
@foreach ($empleados as $empleado)
    <p>
        {{ $empleado->nombre }}
    </p>
@endforeach