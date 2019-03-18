<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Funcion;

class FuncionController extends Controller
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

    $this->funciones = Funcion::with(['cargo', 'tipo_funcion']); 


    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'funciones'=>$this->funciones->paginate((int)$this->per_page),
      ]);
    }


    return $this->funciones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->funcion = Funcion::create($request->all());
    return $this->funcion;
  }

  public function show($id)
  {
    $this->funcion = Funcion::find($id);
    return $this->funcion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->funcion = Funcion::find($id);
    $this->funcion = $this->funcion->update($request->all());
    return response()->json($this->funcion);

  }

  public function destroy($id)
  {
    $this->funcion = Funcion::find($id);
    $this->funcion = $this->funcion->delete();
  }
}
