<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescuentoController extends Controller
{
  public function index()
  {
    $this->descuentos = Descuento::all(); 
    return $this->descuentos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->descuento = Descuento::create($request->all());
    return $this->descuento;
  }

  public function show($id)
  {
    $this->descuento = Descuento::find($id);
    return $this->descuento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->descuento = Descuento::find($id);
    $this->descuento = $this->descuento->update($request->all());
    return response()->json($this->descuento);

  }

  public function destroy($id)
  {
    $this->descuento = Descuento::find($id);
    $this->descuento = $this->descuento->delete();
  }
}
