<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\ValorMonetario;

class ValorMonetarioController extends Controller
{
  public function index()
  {
    $this->valores_monetarios = ValorMonetario::all(); 
    return $this->valores_monetarios;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->valor_monetario = ValorMonetario::create($request->all());
    return $this->valor_monetario;
  }

  public function show($id)
  {
    $this->valor_monetario = ValorMonetario::find($id);
    return $this->valor_monetario;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->valor_monetario = ValorMonetario::find($id);
    $this->valor_monetario = $this->valor_monetario->update($request->all());
    return response()->json($this->valor_monetario);

  }

  public function destroy($id)
  {
    $this->valor_monetario = ValorMonetario::find($id);
    $this->valor_monetario = $this->valor_monetario->delete();
  }
}
