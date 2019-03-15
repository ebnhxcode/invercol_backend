<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoFuncionController extends Controller
{
  public function index()
  {
    $this->cargo_funciones = CargoFuncion::all(); 
    return $this->cargo_funciones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->cargo_funcion = CargoFuncion::create($request->all());
    return $this->cargo_funcion;
  }

  public function show($id)
  {
    $this->cargo_funcion = CargoFuncion::find($id);
    return $this->cargo_funcion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->cargo_funcion = CargoFuncion::find($id);
    $this->cargo_funcion = $this->cargo_funcion->update($request->all());
    return response()->json($this->cargo_funcion);

  }

  public function destroy($id)
  {
    $this->cargo_funcion = CargoFuncion::find($id);
    $this->cargo_funcion = $this->cargo_funcion->delete();
  }
}
