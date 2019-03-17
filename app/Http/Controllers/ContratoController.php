<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contrato;

class ContratoController extends Controller
{

  private $per_page;

  public function validatePagination ($request) {
    if (!$request->per_page) {
        $this->per_page = 10;
    } else {
        $this->per_page = $request->per_page;
    }
  }

  public function index(Request $request)
  {
    $this->validatePagination($request);

    $this->contratos = Contrato::with(['tipo_contrato','ficha_trabajador']); 

    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'contratos'=>$this->contratos->paginate((int)$this->per_page),
      ]);
    }

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
    return response()->json($this->contrato);

  }

  public function destroy($id)
  {
    $this->contrato = Contrato::find($id);
    $this->contrato = $this->contrato->delete();
  }
}
