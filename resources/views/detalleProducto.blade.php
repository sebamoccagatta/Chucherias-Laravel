@extends('layouts.app')

@section('content')
<section class="cont-detalle">


  <h3 class="titulo">{{$producto->nombre}}</h3>

  <article class="cont-det">
    <div class="foto-det">
      {{-- imagen --}}
      <img class="det-foto" src="/storage/{{$producto->foto}}" width="350px" alt="">
    </div>
    <div class="descri">
    <div class="">
      <h5 class="desc">Descripcion:</h5>
      <p class="desc">{{$producto->descripcion}}</p>
    </div>
    {{-- precio y boton de agregar al carro --}}
    <div class="detprod">
      <p class="precio det">$ {{$producto->precio}}</p>
      <p><a href="cart/add/{{$producto->id}}" class="botoncarro det navbarSupportedContent"><i class="fas fa-cart-plus" ></i>Agregar al carro</a> </p>
    </div>
    </div>
  </article>
</section>

@endsection
