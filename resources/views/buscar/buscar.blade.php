@extends('layouts.app')

@section('title','Buscar')

@section('navbar')
    @include('navigation.navbar')
@endsection

@if(request()->has('q'))
    @php
        $partes = explode('-', request()->input('q'));
        $tipo = $partes[0];
        $id = $partes[1]
    @endphp    

    @if(isset($datos))
        @include('buscar.perfiles.'.$tipo, ['id'=>$id, 'tipo'=>$tipo, 'datos'=>$datos])
    @else
        <p>No se encontraron resultados.</p>
        
    @endif

@else
    @include('buscar.header')
@endif


@section('footer')
    @include('navigation.footer')
@endsection