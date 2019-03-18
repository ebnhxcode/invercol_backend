<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\DetalleDocumento;

class DetalleDocumentoController extends Controller
{
  public function index()
  {
    $this->detalle_documentos = DetalleDocumento::all(); 
    return $this->detalle_documentos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->detalle_documento = DetalleDocumento::create($request->all());
    return $this->detalle_documento;
  }

  public function show($id)
  {
    $this->detalle_documento = DetalleDocumento::find($id);
    return $this->detalle_documento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->detalle_documento = DetalleDocumento::find($id);
    $this->detalle_documento = $this->detalle_documento->update($request->all());
    return response()->json($this->detalle_documento);

  }

  public function destroy($id)
  {
    $this->detalle_documento = DetalleDocumento::find($id);
    $this->detalle_documento = $this->detalle_documento->delete();
  }
}
