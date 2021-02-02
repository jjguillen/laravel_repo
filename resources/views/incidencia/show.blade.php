
<tr>
    <td>{{ $incidencia->latitud }}</td>
    <td>{{ $incidencia->longitud }}</td>
    <td>{{ $incidencia->ciudad }}</td>
    <td>{{ $incidencia->direccion }}</td>
    <td>{{ $incidencia->estado }}</td>
    <td>{{ $incidencia->nivel }}</td>
    <td>{{ $incidencia->empleado->nombre }} {{ $incidencia->empleado->apellidos }}</td>
    <td>
        <a href="/incidencias/{{ $incidencia->id }}/delete"><i class="fas fa-trash-alt"></i></a>
        <a href="/incidencias/{{ $incidencia->id }}/edit"><i class="far fa-edit"></i></a>
        <a href="/incidencias/{{ $incidencia->id }}"><i class="fas fa-binoculars"></i></a>
    </td>

</tr>
