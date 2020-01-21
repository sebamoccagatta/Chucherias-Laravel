<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CartController extends Controller
{

  //agregar al carrito

  public function add($id)
  {

    $product =  Producto::find($id);
    $product = [
          'id' => $product->id,
          'nombre' => $product->nombre,
          'descripcion' => $product->descripcion,
          'precio' => $product->precio,
          'foto' => $product->foto,
    ];

     session()->put("user.cart." . $id, $product);


     return view('cart');
  }

  //mostrar carrito

  function show(){
      return view('cart');

  }

  //remover producto

  public function remove($id)
  {

      session()->pull('user.cart.' . $id, "default");
      return view('cart');
  }

  public function gracias()
  {
    return view('gracias');
  }


}
