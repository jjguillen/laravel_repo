@foreach ($incidencias as $incidencia)
    <p>
    Incidencia {{ $incidencia->id }} {{ $incidencia->latitud }}
    {{ $incidencia->longitud }} {{ $incidencia->ciudad }}
    </p>
@endforeach