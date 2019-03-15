<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoSubvencionController extends Controller
{
  public function index()
  {
    $this->tipo_subvenciones = TipoSubvencion::all(); 
    return $this->tipo_subvenciones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->tipo_subvencion = TipoSubvencion::create($request->all());
    return $this->tipo_subvencion;
  }

  public function show($id)
  {
    $this->tipo_subvencion = TipoSubvencion::find($id);
    return $this->tipo_subvencion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->tipo_subvencion = TipoSubvencion::find($id);
    $this->tipo_subvencion = $this->tipo_subvencion->update($request->all());
    return response()->json($this->tipo_subvencion);

  }

  public function destroy($id)
  {
    $this->tipo_subvencion = TipoSubvencion::find($id);
    $this->tipo_subvencion = $this->tipo_subvencion->delete();
  }
}
