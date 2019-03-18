<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\CargoFuncion;

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

    $cargo_funcion_existe = CargoFuncion::where('cargo_id', $request->cargo_id)
      ->where('funcion_id', $request->funcion_id)
      ->first();
    
      if (count($cargo_funcion_existe) == 0) {
        $this->cargo_funcion = CargoFuncion::create($request->all());
        return $this->cargo_funcion;
      }
      
      return response()->json([
        'status' => 401,
        'message' => ''
      ]);
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
