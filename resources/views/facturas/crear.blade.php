@extends('layouts.app')

@section('content')
<form class="form-group" action="/factura" method="POST">
    @csrf
    <div class="form-group">
        <input type="number" class="form-control" name="valor">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
