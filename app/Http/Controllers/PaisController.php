<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Pais;

class PaisController extends Controller
{
  public function index()
  {
    $this->paises = Pais::all(); 
    return $this->paises;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->pais = Pais::create($request->all());
    return $this->pais;
  }

  public function show($id)
  {
    $this->pais = Pais::find($id);
    return $this->pais;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->pais = Pais::find($id);
    $this->pais = $this->pais->update($request->all());
    return $this->pais;

  }

  public function destroy($id)
  {
    $this->pais = Pais::find($id);
    $this->pais = $this->pais->delete();
  }
}
