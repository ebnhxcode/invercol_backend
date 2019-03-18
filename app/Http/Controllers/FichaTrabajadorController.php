<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\FichaTrabajador;

class FichaTrabajadorController extends Controller
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

    $this->ficha_trabajadores = FichaTrabajador::with(['contratos.rbd','contratos.subvencion','cargo','rbd']); 


    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'ficha_trabajadores'=>$this->ficha_trabajadores->paginate((int)$this->per_page),
      ]);
    }

    return $this->ficha_trabajadores->get();
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->ficha_trabajador = FichaTrabajador::create($request->all());
    return $this->ficha_trabajador;
  }

  public function show($id)
  {
    $this->ficha_trabajador = FichaTrabajador::find($id);
    return $this->ficha_trabajador;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->ficha_trabajador = FichaTrabajador::find($id);
    $this->ficha_trabajador = $this->ficha_trabajador->update($request->all());
    return response()->json($this->ficha_trabajador);

  }

  public function destroy($id)
  {
    $this->ficha_trabajador = FichaTrabajador::find($id);
    $this->ficha_trabajador = $this->ficha_trabajador->delete();
  }
}
