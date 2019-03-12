<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cuenta;


class CuentaController extends Controller
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

    $this->cuentas = Cuenta::with(['cuenta_dependencia', 'libros_cuentas.libro']); 

    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'cuentas'=>$this->cuentas->paginate((int)$this->per_page),
      ]);
    }

    return $this->cuentas->get();
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->cuenta = Cuenta::create($request->all());
    return $this->cuenta;
  }

  public function show($id)
  {
    $this->cuenta = Cuenta::find($id);
    return $this->cuenta;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->cuenta = Cuenta::find($id);
    $this->cuenta = $this->cuenta->update($request->all());
    return response()->json($this->cuenta);
  }

  public function destroy($id)
  {
    $this->cuenta = Cuenta::find($id);
    $this->cuenta = $this->cuenta->delete();
  }

  public function asociarLibroACuenta (Request $request) {
    $this->cuenta_id = $request->cuenta_id;
    $this->libro_id = $request->libro_id;


  }
}
