@extends('layouts.app')
@section('content')
<p class="h1">Productos</p>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->valor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@can('crear-producto')
<div class="col-12">
    <div class="col-4">
        <a href="/producto/create" class="btn btn-primary btn-sm">Crear un producto</a>
    </div>
</div>
@endcan
@endsection
