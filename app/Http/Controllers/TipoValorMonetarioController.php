<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TipoValorMonetario;

class TipoValorMonetarioController extends Controller
{
  public function index()
  {
    $this->tipo_valores_monetarios = TipoValorMonetario::all(); 
    return $this->tipo_valores_monetarios;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->tipo_valor_monetario = TipoValorMonetario::create($request->all());
    return $this->tipo_valor_monetario;
  }

  public function show($id)
  {
    $this->tipo_valor_monetario = TipoValorMonetario::find($id);
    return $this->tipo_valor_monetario;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->tipo_valor_monetario = TipoValorMonetario::find($id);
    $this->tipo_valor_monetario = $this->tipo_valor_monetario->update($request->all());
    return response()->json($this->tipo_valor_monetario);

  }

  public function destroy($id)
  {
    $this->tipo_valor_monetario = TipoValorMonetario::find($id);
    $this->tipo_valor_monetario = $this->tipo_valor_monetario->delete();
  }
}
