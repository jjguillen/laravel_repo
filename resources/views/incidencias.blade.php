@extends('layouts.app')

@section('title')
    @parent
    <h3>Incidencias</h3>
@endsection

@section('content')
    <table>
        <tr>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Ciudad</th>
            <th>Dirección</th>
            <th>Estado</th>
        </tr>
        @each('incidencia.show', $incidencias, 'incidencia')
    </table>    
@endsection



