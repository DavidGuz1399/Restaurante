@extends('layouts.app')

@section('content')
<form class="form-group" action="/mesa" method="POST">
    @csrf
    <div class="col-12">
        <div class="col-4">
            <div class="form-group">
                <label for="">Numero de la mesa</label>
                <input type="number" class="form-control" name="numero">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="col-4">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>
@endsection
