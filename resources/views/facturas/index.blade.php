@extends('layouts.app')
@section('content')
<p class="h1">Facturas</p>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($facturas as $factura)
        <tr>
            <td>{{$factura->id}}</td>
            <td>{{$factura->valor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="col-12">
    <div class="col-4">
        <a href="/crear-factura" class="btn btn-primary btn-sm">Crear una factura</a>
    </div>
</div>
@endsection
