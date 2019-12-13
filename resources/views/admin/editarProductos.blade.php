@extends('layouts.app')

@section('content')
  <h3>Editar Producto:</h3>

  <form class="" action="/editarProducto" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    <input type="hidden" name="id" value="{{$producto->id}}">
    <div class="">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="{{$producto->nombre}}">
    </div>
    <div class="">
      <label for="precio">Precio:</label>
      <input type="number" name="precio" value="{{$producto->precio}}">
    </div>
    <div class="">
      <label for="nombre">Descripcion:</label>
      <textarea name="descripcion" rows="8" cols="80" value="{{$producto->descripcion}}"></textarea>
    </div>
    <div class="">
      <label for="nombre">Foto:</label>
      <input type="file" name="foto" value="">
    </div>
    <div class="">
      <button type="submit" name="button">Guardar Producto</button>
    </div>
  </form>

@endsection
