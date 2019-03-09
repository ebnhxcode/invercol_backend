<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FichaTrabajador;

class FichaTrabajadorController extends Controller
{
  public function index()
  {
    $this->ficha_trabajadores = FichaTrabajador::all(); 
    return $this->ficha_trabajadores;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->ficha_trabajador = FichaTrabajador::create($request->all());
    return $this->ficha_trabajador;
  }

  public function show($id)
  {
    $this->ficha_trabajador = FichaTrabajador::find($id);
    return $this->ficha_trabajador;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->ficha_trabajador = FichaTrabajador::find($id);
    $this->ficha_trabajador = $this->ficha_trabajador->update($request->all());
    return response()->json($this->ficha_trabajador);

  }

  public function destroy($id)
  {
    $this->ficha_trabajador = FichaTrabajador::find($id);
    $this->ficha_trabajador = $this->ficha_trabajador->delete();
  }
}
