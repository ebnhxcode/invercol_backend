<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\LibroTipoDocumento;

class LibroTipoDocumentoController extends Controller
{
  public function index()
  {
    $this->libro_tipo_documentos = LibroTipoDocumento::all(); 
    return $this->libro_tipo_documentos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->libro_tipo_documento = LibroTipoDocumento::create($request->all());
    return $this->libro_tipo_documento;
  }

  public function show($id)
  {
    $this->libro_tipo_documento = LibroTipoDocumento::find($id);
    return $this->libro_tipo_documento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->libro_tipo_documento = LibroTipoDocumento::find($id);
    $this->libro_tipo_documento = $this->libro_tipo_documento->update($request->all());
    return response()->json($this->libro_tipo_documento);

  }

  public function destroy($id)
  {
    $this->libro_tipo_documento = LibroTipoDocumento::find($id);
    $this->libro_tipo_documento = $this->libro_tipo_documento->delete();
  }
}
