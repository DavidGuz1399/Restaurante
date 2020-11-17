@extends('layouts.app')
@section('content')
<p class="h1">Mesas</p>
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Numero</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mesas as $mesa)
        <tr>
            <td>{{$mesa->id}}</td>
            <td>{{$mesa->numero}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@can('crear-mesa')
<div class="col-12">
    <div class="col-4">
        <a href="/mesa/create" class="btn btn-primary btn-sm">Crear una mesa</a>
    </div>
</div>
@endcan
@endsection
