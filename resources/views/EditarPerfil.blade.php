@extends('layouts.app')

@section('content')
  <h3>Editar Perfil</h3>

  <form class="" action="/EditarPerfil" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
    <input type="hidden" name="id" value="{{$usuario->id}}">
    <div class="">
      <label for="name">Nombre:</label>
      <input type="text" name="name" value="{{$usuario->name}}">
    </div>
    <div class="">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" value="{{$usuario->apellido}}">
    </div>
    <div class="">
      <label for="email">Email:</label>
      <input type="email" name="email" value="{{$usuario->email}}">
    </div>
    <div class="">
      <label for="password">contraseña</label>
      <input type="password" name="password" value="{{$usuario->password}}">
    </div>
    <div class="">
      <label for="avatar">Foto:</label>
      <input type="file" name="avatar" value="">
    </div>
    <div class="">
      <button type="submit" name="button">Actualizar Perfil</button>
    </div>
  </form>

@endsection
