<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
  public function index()
  {
    $this->documentos = Documento::all(); 
    return $this->documentos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->documento = Documento::create($request->all());
    return $this->documento;
  }

  public function show($id)
  {
    $this->documento = Documento::find($id);
    return $this->documento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->documento = Documento::find($id);
    $this->documento = $this->documento->update($request->all());
    return response()->json($this->documento);

  }

  public function destroy($id)
  {
    $this->documento = Documento::find($id);
    $this->documento = $this->documento->delete();
  }
}
