<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;

use App\Producto;

class ProductosController extends Controller
{
  public function index(){
    $productos = Producto::all();
    return view('productos', compact('productos'));
  }

  public function agregar(Request $datos){
    $validaciones = [
      'nombre' => 'required|max:71',
      'precio' => 'required|integer',
      'descripcion' => 'max:153',
      'foto' => 'required|file|image',
    ];
    // $mensajes = [];

    $this->validate($datos, $validaciones);

    $ruta = $datos->file('foto')->store('public');
    $imagen = basename($ruta);

    $productoNuevo = new Producto();
    $productoNuevo->nombre = $datos['nombre'];
    $productoNuevo->precio = $datos['precio'];
    $productoNuevo->descripcion = $datos['descripcion'];
    $productoNuevo->foto = $imagen;

    $productoNuevo->save();

    return redirect('/productos');
  }

  public function detalle($id){
    $producto = Producto::find($id);
    return view('detalleProducto', compact('producto'));
  }

  public function editar($id){
    $producto = Producto::find($id);
    return view('admin.editarProductos', compact('producto'));
  }

  public function actualizar(Request $datos){
    $validaciones = [
      'id' => 'required',
      'nombre' => 'required|max:71',
      'precio' => 'required|integer',
      'descripcion' => 'max:153',
      'foto' => 'required|file|image',
    ];
    // $mensajes = [];

    $this->validate($datos, $validaciones);

    $ruta = $datos->file('foto')->store('public');
    $imagen = basename($ruta);

    $productoEditado = Producto::find($datos["id"]);

    $productoEditado->nombre = $datos['nombre'];
    $productoEditado->precio = $datos['precio'];
    $productoEditado->descripcion = $datos['descripcion'];
    $productoEditado->foto = $imagen;

    $productoEditado->save();

    return redirect('/productos');

  }
}
