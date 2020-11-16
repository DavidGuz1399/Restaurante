@extends('layouts.app')

@section('content')
<form class="form-group" action="/factura" method="POST">
    @csrf
    <input type="number" class="form-group" name="valor">
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
