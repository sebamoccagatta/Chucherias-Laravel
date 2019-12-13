 @extends('layouts.app')

 @section('content')

   <h1>Mi Perfil</h1>


   <img src="/storage/{{$usuario->avatar}}" alt="foto de perfil" width="150px">

   <h2>Nombre: {{$usuario->name}}</h2>

   <h2>Apellido: {{$usuario->apellido}}</h2>

   <h3>E-mail: {{$usuario->email}}</h3>

   <a href="/EditarPerfil/{{$usuario->id}}">Editar Perfil</a>

   @if ($usuario->rol==9)
     <a href="/administrador/{{$usuario->id}}">Opciones de Administrador</a>
   @endif
 @endsection
