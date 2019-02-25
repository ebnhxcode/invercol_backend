<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Comuna;

class ComunaController extends Controller
{

  public function index()
  {
    $this->comunas = Comuna::all(); 
    return $this->comunas;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->comuna = Comuna::create($request->all());
    return $this->comuna;
  }

  public function show($id)
  {
    $this->comuna = Comuna::find($id);
    return $this->comuna;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->comuna = Comuna::find($id);
    $this->comuna = $this->comuna->update($request->all());
    return $this->comuna;

  }

  public function destroy($id)
  {
    $this->comuna = Comuna::find($id);
    $this->comuna = $this->comuna->delete();
  }
}
