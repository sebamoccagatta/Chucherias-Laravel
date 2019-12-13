@extends('layouts.app')

@section('content')
  <h1 class="h1">Chucherias</h1>

  {{-- <div class="car">
    <img class="a" src="/storage/bailarina.gif"  alt="">
  </div> --}}
  <div class="contcarru">
    <div class="carrusel">

      <figure><img src="/storage/1.jpg"></figure>
      <figure><img src="/storage/2.jpeg"></figure>
      <figure><img src="/storage/3.jpeg"></figure>
      <figure><img src="/storage/4.jpeg"></figure>
      <figure><img src="/storage/5.jpeg"></figure>
      <figure><img src="/storage/6.jpg"></figure>


      <!-- <figure><img src="images/7.jpg"></figure>
      <figure><img src="images/8.jpg"></figure>
      <figure><img src="images/9.jpg"></figure>
      <figure><img src="images/10.jpg"></figure> -->
    </div>
  </div>

  <article class="contenedor separacion">
    <h3 class="titulo">Algunos de nuestros productos</h3>
@foreach ($productos as $producto)
  <div class="productos">
    <div class="otro">

      <div class="foto-Producto">
        <img class="fotito" src="/storage/{{$producto->foto}}" width="200px" alt="">
      </div>
      {{-- precio y nombre del prod --}}
      <div class="descripcion">
        <h4 class="nombre">{{$producto->nombre}}</h4>
        <p class="precio">$ {{$producto->precio}}</p>
      </div>

      <p> <a href="/detalleProducto/{{$producto->id}}"class="botonvermas">Ver Mas</a> </p>
      <p><a href="#" class="botoncarro"><i class="fas fa-cart-plus" ></i>    Agregar al Carrito</a> </p>
      @isset($_SESSION)
        @if (Auth::user()->rol==9)

        <a href="/editarProductos/{{$producto->id}}">Editar Producto</a>
      @endif
      @endisset

      </div>
  </div>
@endforeach
</article>

@endsection
