@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id Marca</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($marcas as $marca)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{ $marca->idMarca }}</td>
                    <td>{{ $marca->descripcion }}</td>
                    @php
                        $i = $i + 1;
                    @endphp
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
