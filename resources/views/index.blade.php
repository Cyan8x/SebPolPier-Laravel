@extends('layouts.plantilla')

{{--
    Si es que en esta pagina se estaria pasando un parametro o variable se debe hacer esto:

    @section('title', 'SebPolPier' . $curso)

    @section('content')
        <h1>Bienvenido a SebPolPier:  {{$curso}} </h1>
    @endsection
--}}

@section('title', 'SebPolPier')

@section('content')
    <h1>Bienvenido a SebPolPier</h1>
@endsection