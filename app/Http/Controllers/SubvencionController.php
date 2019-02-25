<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Subvencion;

class SubvencionController extends Controller
{
  public function index()
  {
    $this->subvenciones = Subvencion::all(); 
    return $this->subvenciones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->subvencion = Subvencion::create($request->all());
    return $this->subvencion;
  }

  public function show($id)
  {
    $this->subvencion = Subvencion::find($id);
    return $this->subvencion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->subvencion = Subvencion::find($id);
    $this->subvencion = $this->subvencion->update($request->all());
    return $this->subvencion;

  }

  public function destroy($id)
  {
    $this->subvencion = Subvencion::find($id);
    $this->subvencion = $this->subvencion->delete();
  }
}
