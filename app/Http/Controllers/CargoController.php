<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cargo;

class CargoController extends Controller
{

  public function index()
  {
    $this->cargos = Cargo::all(); 
    return $this->cargos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->cargo = Cargo::create($request->all());
    return $this->cargo;
  }

  public function show($id)
  {
    $this->cargo = Cargo::find($id);
    return $this->cargo;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->cargo = Cargo::find($id);
    $this->cargo = $this->cargo->update($request->all());
    return $this->cargo;

  }

  public function destroy($id)
  {
    $this->cargo = Cargo::find($id);
    $this->cargo = $this->cargo->delete();
  }
}
