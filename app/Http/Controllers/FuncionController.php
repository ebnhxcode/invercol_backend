<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Funcion;

class FuncionController extends Controller
{
  public function index()
  {
    $this->funciones = Funcion::all(); 
    return $this->funciones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->funcion = Funcion::create($request->all());
    return $this->funcion;
  }

  public function show($id)
  {
    $this->funcion = Funcion::find($id);
    return $this->funcion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->funcion = Funcion::find($id);
    $this->funcion = $this->funcion->update($request->all());
    return response()->json($this->funcion);

  }

  public function destroy($id)
  {
    $this->funcion = Funcion::find($id);
    $this->funcion = $this->funcion->delete();
  }
}
