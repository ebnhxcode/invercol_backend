<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TipoFuncion;

class TipoFuncionController extends Controller
{
  public function index()
  {
    $this->tipo_funciones = TipoFuncion::all(); 
    return $this->tipo_funciones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->tipo_funcion = TipoFuncion::create($request->all());
    return $this->tipo_funcion;
  }

  public function show($id)
  {
    $this->tipo_funcion = TipoFuncion::find($id);
    return $this->tipo_funcion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->tipo_funcion = TipoFuncion::find($id);
    $this->tipo_funcion = $this->tipo_funcion->update($request->all());
    return response()->json($this->tipo_funcion);

  }

  public function destroy($id)
  {
    $this->tipo_funcion = TipoFuncion::find($id);
    $this->tipo_funcion = $this->tipo_funcion->delete();
  }
}
