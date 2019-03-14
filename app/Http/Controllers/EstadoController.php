<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Estado;

class EstadoController extends Controller
{
  public function index()
  {
    $this->estados = Estado::all(); 
    return $this->estados;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->estado = Estado::create($request->all());
    return $this->estado;
  }

  public function show($id)
  {
    $this->estado = Estado::find($id);
    return $this->estado;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->estado = Estado::find($id);
    $this->estado = $this->estado->update($request->all());
    return response()->json($this->estado);

  }

  public function destroy($id)
  {
    $this->estado = Estado::find($id);
    $this->estado = $this->estado->delete();
  }
}
