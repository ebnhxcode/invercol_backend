<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cargo;

class CargoController extends Controller
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

    $this->cargos = Cargo::with(['tipo_cargo', 'funciones']);

    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'cargos'=>$this->cargos->paginate((int)$this->per_page),
      ]);
    }


    return $this->cargos;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->cargo = Cargo::create($request->all());
    return $this->cargo;
  }

  public function show($id)
  {
    $this->cargo = Cargo::find($id);
    return $this->cargo;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->cargo = Cargo::find($id);
    $this->cargo = $this->cargo->update($request->all());
    return response()->json($this->cargo);

  }

  public function destroy($id)
  {
    $this->cargo = Cargo::find($id);
    $this->cargo = $this->cargo->delete();
  }
}
