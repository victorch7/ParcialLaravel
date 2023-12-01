@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Victor Danilo Chacon</h1>
    {{ __('Dashboard') }}
@stop

@section('content')
    <p>Revisar la secciones del panel izquierdo</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
