@extends('layouts.app')

@section('title', 'Incidencias')

@section('content')
    @each('incidencia.show', $incidencias, 'incidencia')    
@endsection



