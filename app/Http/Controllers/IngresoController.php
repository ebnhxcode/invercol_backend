<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Ingreso;

class IngresoController extends Controller
{
  public function index()
  {
    $this->ingresos = Ingreso::all(); 
    return $this->ingresos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->ingreso = Ingreso::create($request->all());
    return $this->ingreso;
  }

  public function show($id)
  {
    $this->ingreso = Ingreso::find($id);
    return $this->ingreso;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->ingreso = Ingreso::find($id);
    $this->ingreso = $this->ingreso->update($request->all());
    return response()->json($this->ingreso);

  }

  public function destroy($id)
  {
    $this->ingreso = Ingreso::find($id);
    $this->ingreso = $this->ingreso->delete();
  }
}
