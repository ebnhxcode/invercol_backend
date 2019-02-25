<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Permiso;

class PermisoController extends Controller
{
  public function index()
  {
    $this->permisos = Permiso::all(); 
    return $this->permisos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->permiso = Permiso::create($request->all());
    return $this->permiso;
  }

  public function show($id)
  {
    $this->permiso = Permiso::find($id);
    return $this->permiso;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->permiso = Permiso::find($id);
    $this->permiso = $this->permiso->update($request->all());
    return $this->permiso;

  }

  public function destroy($id)
  {
    $this->permiso = Permiso::find($id);
    $this->permiso = $this->permiso->delete();
  }
}
