<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contrato;

class ContratoController extends Controller
{
  public function index()
  {
    $this->contratos = Contrato::all(); 
    return $this->contratos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->contrato = Contrato::create($request->all());
    return $this->contrato;
  }

  public function show($id)
  {
    $this->contrato = Contrato::find($id);
    return $this->contrato;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->contrato = Contrato::find($id);
    $this->contrato = $this->contrato->update($request->all());
    return $this->contrato;

  }

  public function destroy($id)
  {
    $this->contrato = Contrato::find($id);
    $this->contrato = $this->contrato->delete();
  }
}
