<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Continente;

class ContinenteController extends Controller
{
  public function index()
  {
    $this->continentes = Continente::all(); 
    return $this->continentes;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->continente = Continente::create($request->all());
    return $this->continente;
  }

  public function show($id)
  {
    $this->continente = Continente::find($id);
    return $this->continente;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->continente = Continente::find($id);
    $this->continente = $this->continente->update($request->all());
    return response()->json($this->continente);

  }

  public function destroy($id)
  {
    $this->continente = Continente::find($id);
    $this->continente = $this->continente->delete();
  }
}
