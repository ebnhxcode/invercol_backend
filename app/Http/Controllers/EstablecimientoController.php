<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
  public function index()
  {
    $this->establecimientos = Establecimiento::all(); 
    return $this->establecimientos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->establecimiento = Establecimiento::create($request->all());
    return $this->establecimiento;
  }

  public function show($id)
  {
    $this->establecimiento = Establecimiento::find($id);
    return $this->establecimiento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->establecimiento = Establecimiento::find($id);
    $this->establecimiento = $this->establecimiento->update($request->all());
    return $this->establecimiento;

  }

  public function destroy($id)
  {
    $this->establecimiento = Establecimiento::find($id);
    $this->establecimiento = $this->establecimiento->delete();
  }
}
