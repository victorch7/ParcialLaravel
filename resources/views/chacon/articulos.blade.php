@extends('adminlte::page')

@section('title', 'Articulo')

@section('content_header')
    <h1>Listado de Articulos</h1>
@stop

@section('content')

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Referencia</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Color</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Obervación</th>
                <th scope="col">Foto</th>
                <th scope="col">Marca</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($arti as $articulo)
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{ $articulo->referencia }}</td>
                    <td>{{ $articulo->nombre }}</td>
                    <td>{{ $articulo->descripcion}}</td>
                    <td>{{ $articulo->color}}</td>
                    <td>{{ $articulo->precioUnitario }}</td>
                    <td>{{ $articulo->observacion }}</td>
                    <td>
                        <img src="{{ asset($articulo->foto) }}" style="max-width: 100px; max-height: 100px; border-radius: 8px;">
                    </td>
                    <td>{{ $articulo->descripcion}}</td>

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
