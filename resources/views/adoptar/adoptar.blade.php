@extends('layouts.app')

@section('title','Buscar')

@section('navbar')
    @include('navigation.navbar')
@endsection

@if(request()->has('id'))
    @if(isset($perrito))
        @include('formularios.adoptar.adoptar', ['perrito'=>$perrito, 'usuario'=>$usuario])
    @else
        <p>No se encontraron resultados.</p>
    @endif
@endif


@section('footer')
    @include('navigation.footer')
@endsection