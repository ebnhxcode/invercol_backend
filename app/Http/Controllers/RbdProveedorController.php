<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\RbdProveedor;

class RbdProveedorController extends Controller
{
  public function index()
  {
    $this->rbd_proveedores = RbdProveedor::all(); 
    return $this->rbd_proveedores;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->rbd_proveedor = RbdProveedor::create($request->all());
    return $this->rbd_proveedor;
  }

  public function show($id)
  {
    $this->rbd_proveedor = RbdProveedor::find($id);
    return $this->rbd_proveedor;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->rbd_proveedor = RbdProveedor::find($id);
    $this->rbd_proveedor = $this->rbd_proveedor->update($request->all());
    return response()->json($this->rbd_proveedor);

  }

  public function destroy($id)
  {
    $this->rbd_proveedor = RbdProveedor::find($id);
    $this->rbd_proveedor = $this->rbd_proveedor->delete();
  }
}
