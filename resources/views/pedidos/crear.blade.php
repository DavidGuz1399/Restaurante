@extends('layouts.app')

@section('content')
<form class="form-group" action="/pedido" method="POST">
    @csrf
    <div class="form-group">
       <label for="">Usuario</label>
       <select name="usuario" id="usuario" class="form-control">
           <option value=""></option>
           @foreach ($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->name}}</option>
           @endforeach
       </select>
    </div>
    <div class="form-group">
       <label for="">Productos</label>
       <select name="producto" id="producto" class="form-control">
           <option value=""></option>
           @foreach ($productos as $producto)
            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
           @endforeach
       </select>
    </div>
    <div class="form-group">
        <label for="">Cantidad</label>
        <input type="text" name="cantidad" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
