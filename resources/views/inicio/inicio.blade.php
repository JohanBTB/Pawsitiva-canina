@extends('layouts.app')

@section('title','Inicio')

@section('navbar')
    @include('navigation.navbar')
@endsection

@section('content1')
    @include('inicio.header')
@endsection

@section('content2')
    @include('inicio.content')
@endsection

@section('footer')
    @include('navigation.footer')
@endsection

