@extends('layouts.app')

@section('title','Inicio')

@section('navbar')
    @include('navigation.navbar')
@endsection

@if(isset($_GET['registro']) )
    @if($_GET['registro'] == 'usuario')
        @include('formularios.iniciar-sesion.iniciar-usuario')
        @elseif($_GET['registro'] == 'albergue')
        @include('formularios.iniciar-sesion.iniciar-albergue')
    @endif
@else
    @include('formularios.iniciar-sesion.base')
@endif

@section('footer')
    @include('navigation.footer')
@endsection
