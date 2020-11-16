@extends('layouts.app')

@section('content')
<form class="form-group" action="/producto" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="descripcion">
    </div>
    <div class="form-group">
        <label for="">Valor</label>
        <input type="number" class="form-control" name="valor">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
