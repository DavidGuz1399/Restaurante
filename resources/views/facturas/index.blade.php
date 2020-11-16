@extends('layouts.app')
@section('content')
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
@endsection
