<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\LibroCuenta;

class LibroCuentaController extends Controller
{
  
  public function index()
  {
    $this->libro_cuentas = LibroCuenta::all(); 
    return $this->libro_cuentas;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {

    $libro_cuenta_existe = LibroCuenta::where('cuenta_id', $request->cuenta_id)
      ->where('libro_id', $request->libro_id)
      ->first();
    
      if (count($libro_cuenta_existe) == 0) {
        $this->libro_cuenta = LibroCuenta::create($request->all());
        return $this->libro_cuenta;
      }
      
      return response()->json([
        'status' => 401,
        'message' => ''
      ]);
  }

  public function show($id)
  {
    $this->libro_cuenta = LibroCuenta::find($id);
    return $this->libro_cuenta;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->libro_cuenta = LibroCuenta::find($id);
    $this->libro_cuenta = $this->libro_cuenta->update($request->all());
    return response()->json($this->libro_cuenta);

  }

  public function destroy($id)
  {
    $this->libro_cuenta = LibroCuenta::find($id);
    $this->libro_cuenta = $this->libro_cuenta->delete();
  }
}
