@extends('layouts.app')

@section('content')
  <h3>Agrega un Producto</h3>

  <form class="" action="/agregarProducto" method="post" enctype="multipart/form-data">
    {{-- {{csrf_field()}} --}}
    @csrf
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    </ul>
    <div class="">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="">
    </div>
    <div class="">
      <label for="precio">Precio:</label>
      <input type="number" name="precio" value="">
    </div>
    <div class="">
      <label for="nombre">Descripcion:</label>
      <textarea name="descripcion" rows="8" cols="80"></textarea>
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
