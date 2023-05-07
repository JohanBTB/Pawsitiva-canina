@extends('layouts.app')

@section('title','Sobre nosotros')

@section('navbar')
    @include('navigation.navbar')
@endsection

@section('content1')
    @include('sobre-nosotros.header')
@endsection

@section('footer')
    @include('navigation.footer')
@endsection