<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\LibroCuenta;

class LibroCuentaController extends Controller
{
  public function index()
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
    $this->libro_cuenta = LibroCuenta::create($request->all());
    return $this->libro_cuenta;
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
    return $this->libro_cuenta;

  }

  public function destroy($id)
  {
    $this->libro_cuenta = LibroCuenta::find($id);
    $this->libro_cuenta = $this->libro_cuenta->delete();
  }
}
