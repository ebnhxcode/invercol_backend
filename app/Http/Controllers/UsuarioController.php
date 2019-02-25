<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  public function index()
  {
    $this->usuarios = Usuario::all(); 
    return $this->usuarios;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->usuario = Usuario::create($request->all());
    return $this->usuario;
  }

  public function show($id)
  {
    $this->usuario = Usuario::find($id);
    return $this->usuario;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->usuario = Usuario::find($id);
    $this->usuario = $this->usuario->update($request->all());
    return $this->usuario;

  }

  public function destroy($id)
  {
    $this->usuario = Usuario::find($id);
    $this->usuario = $this->usuario->delete();
  }
}
