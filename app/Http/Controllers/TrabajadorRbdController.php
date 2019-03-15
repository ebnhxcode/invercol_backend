<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrabajadorRbdController extends Controller
{
  public function index()
  {
    $this->trabajador_rbds = TrabajadorRbd::all(); 
    return $this->trabajador_rbds;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->trabajador_rbd = TrabajadorRbd::create($request->all());
    return $this->trabajador_rbd;
  }

  public function show($id)
  {
    $this->trabajador_rbd = TrabajadorRbd::find($id);
    return $this->trabajador_rbd;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->trabajador_rbd = TrabajadorRbd::find($id);
    $this->trabajador_rbd = $this->trabajador_rbd->update($request->all());
    return response()->json($this->trabajador_rbd);

  }

  public function destroy($id)
  {
    $this->trabajador_rbd = TrabajadorRbd::find($id);
    $this->trabajador_rbd = $this->trabajador_rbd->delete();
  }
}
