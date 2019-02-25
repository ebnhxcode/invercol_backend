<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TipoDocumento;

class TipoDocumentoController extends Controller
{
  public function index()
  {
    $this->tipo_documentos = TipoDocumento::all(); 
    return $this->tipo_documentos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->tipo_documento = TipoDocumento::create($request->all());
    return $this->tipo_documento;
  }

  public function show($id)
  {
    $this->tipo_documento = TipoDocumento::find($id);
    return $this->tipo_documento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->tipo_documento = TipoDocumento::find($id);
    $this->tipo_documento = $this->tipo_documento->update($request->all());
    return $this->tipo_documento;

  }

  public function destroy($id)
  {
    $this->tipo_documento = TipoDocumento::find($id);
    $this->tipo_documento = $this->tipo_documento->delete();
  }
}
