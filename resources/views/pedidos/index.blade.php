@extends('layouts.app')
@section('content')
<p class="h1">Pedidos</p>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Producto</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->user->name}}</td>
            <td>{{$pedido->producto->nombre}}</td>
            <td>{{$pedido->cantidad}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@can('crear-pedido')
<div class="col-12">
    <div class="col-4">
        <a href="/pedido/create" class="btn btn-primary btn-sm">Crear un pedido</a>
    </div>
</div>
@endcan
@endsection
