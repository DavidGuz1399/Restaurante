@extends('layouts.app')
@section('content')
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
@endsection
