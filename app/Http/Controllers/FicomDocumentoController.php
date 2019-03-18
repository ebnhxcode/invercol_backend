<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FicomDocumento;

class FicomDocumentoController extends Controller
{
  public function index()
  {
    $this->ficom_documentos = FicomDocumento::all(); 
    return $this->ficom_documentos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->ficom_documento = FicomDocumento::create($request->all());
    return $this->ficom_documento;
  }

  public function show($id)
  {
    $this->ficom_documento = FicomDocumento::find($id);
    return $this->ficom_documento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->ficom_documento = FicomDocumento::find($id);
    $this->ficom_documento = $this->ficom_documento->update($request->all());
    return response()->json($this->ficom_documento);

  }

  public function destroy($id)
  {
    $this->ficom_documento = FicomDocumento::find($id);
    $this->ficom_documento = $this->ficom_documento->delete();
  }
}
