@extends('layouts.app')

@section('title','Registrar')

@section('navbar')
    @include('navigation.navbar')
@endsection
@if(isset($_GET['registro']) )
    @if($_GET['registro'] == 'usuario')
        @include('formularios.registrar.registro-usuario')
    @elseif($_GET['registro'] == 'albergue')
        @include('formularios.registrar.registro-albergue')
    @elseif($_GET['registro'] == 'perrito')
        @include('formularios.registrar.registro-perrito', ['usuarios'=>$usuarios, 'albergues'=>$albergues]);
    @endif
@else
    @include('formularios.registrar.base')
@endif

@section('footer')
    @include('navigation.footer')
@endsection