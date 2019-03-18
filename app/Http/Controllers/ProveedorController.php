<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Proveedor;

class ProveedorController extends Controller
{
  public function index()
  {
    $this->proveedores = Proveedor::all(); 
    return $this->proveedores;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->proveedor = Proveedor::create($request->all());
    return $this->proveedor;
  }

  public function show($id)
  {
    $this->proveedor = Proveedor::find($id);
    return $this->proveedor;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->proveedor = Proveedor::find($id);
    $this->proveedor = $this->proveedor->update($request->all());
    return response()->json($this->proveedor);

  }

  public function destroy($id)
  {
    $this->proveedor = Proveedor::find($id);
    $this->proveedor = $this->proveedor->delete();
  }
}
