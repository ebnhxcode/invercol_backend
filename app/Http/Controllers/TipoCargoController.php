<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TipoCargo;

class TipoCargoController extends Controller
{
  public function index()
  {
    $this->tipo_cargos = TipoCargo::all(); 
    return $this->tipo_cargos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->tipo_cargo = TipoCargo::create($request->all());
    return $this->tipo_cargo;
  }

  public function show($id)
  {
    $this->tipo_cargo = TipoCargo::find($id);
    return $this->tipo_cargo;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->tipo_cargo = TipoCargo::find($id);
    $this->tipo_cargo = $this->tipo_cargo->update($request->all());
    return response()->json($this->tipo_cargo);

  }

  public function destroy($id)
  {
    $this->tipo_cargo = TipoCargo::find($id);
    $this->tipo_cargo = $this->tipo_cargo->delete();
  }
}
