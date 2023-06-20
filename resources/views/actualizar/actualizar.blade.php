@extends('layouts.app')

@section('title','Inicio')

@section('navbar')
    @include('navigation.navbar')
@endsection

@if(isset($_GET['registro']) )
    @if($_GET['registro'] == 'usuario')
        @include('formularios.actualizar.actualizar-usuario')
    @elseif($_GET['registro'] == 'albergue')
        @include('formularios.actualizar.actualizar-albergue')
    @elseif($_GET['registro'] == 'albergue-qr')
        @include('formularios.actualizar.actualizar-albergue-qr')
    @endif
@else
    <?php redirect('/'); ?>
@endif

@section('footer')
    @include('navigation.footer')
@endsection
