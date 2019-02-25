<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TipoContrato;

class TipoContratoController extends Controller
{
  public function index()
  {
    $this->tipo_contratos = TipoContrato::all(); 
    return $this->tipo_contratos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->tipo_contrato = TipoContrato::create($request->all());
    return $this->tipo_contrato;
  }

  public function show($id)
  {
    $this->tipo_contrato = TipoContrato::find($id);
    return $this->tipo_contrato;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->tipo_contrato = TipoContrato::find($id);
    $this->tipo_contrato = $this->tipo_contrato->update($request->all());
    return $this->tipo_contrato;

  }

  public function destroy($id)
  {
    $this->tipo_contrato = TipoContrato::find($id);
    $this->tipo_contrato = $this->tipo_contrato->delete();
  }
}
