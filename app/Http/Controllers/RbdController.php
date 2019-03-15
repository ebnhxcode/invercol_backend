<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RbdController extends Controller
{
  public function index()
  {
    $this->rbds = Rbd::all(); 
    return $this->rbds;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->rbd = Rbd::create($request->all());
    return $this->rbd;
  }

  public function show($id)
  {
    $this->rbd = Rbd::find($id);
    return $this->rbd;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->rbd = Rbd::find($id);
    $this->rbd = $this->rbd->update($request->all());
    return response()->json($this->rbd);

  }

  public function destroy($id)
  {
    $this->rbd = Rbd::find($id);
    $this->rbd = $this->rbd->delete();
  }
}
