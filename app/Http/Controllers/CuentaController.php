<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cuenta;

class CuentaController extends Controller
{
  public function index()
  {
    $this->cuentas = Cuenta::with(['cuenta_dependencia', 'libros_cuentas'])->get(); 
    return $this->cuentas;
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
}
