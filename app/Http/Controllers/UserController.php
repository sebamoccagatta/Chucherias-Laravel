<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

  public function detalle($id){
    $usuario = Usuario::find($id);

    return view('miPerfil', compact('usuario'));
  }



  public function editar($id){
    $usuario = Usuario::find($id);
    return view('EditarPerfil', compact('usuario'));
  }


  public function actualizar(Request $datos){
    $validaciones = [
      'id' => 'required',
      'name' => 'required|max:71',
      'apellido' => 'required|max:71',
      'email' => 'required|email|max:71',
      'password' => 'min:8|required',
      'avatar' => 'required|file|image',
    ];
    // $mensajes = [];

    $this->validate($datos, $validaciones);

    $ruta = $datos->file('avatar')->store('public');
    $imagen = basename($ruta);

    $userNuevo = Usuario::find($datos["id"]);
    $userNuevo->name = $datos['name'];
    $userNuevo->apellido = $datos['apellido'];
    $userNuevo->email = $datos['email'];
    $userNuevo->password = Hash::make($datos['password']);
    $userNuevo->avatar = $imagen;

    $userNuevo->save();

    return redirect('/miPerfil/{id}');
    }

  public function administrador($id){
    $usuario = Usuario::find($id);
    return view('admin.administrador', compact('usuario'));
  }
}
