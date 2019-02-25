<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Region;

class RegionController extends Controller
{
  public function index()
  {
    $this->regiones = Region::all(); 
    return $this->regiones;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->region = Region::create($request->all());
    return $this->region;
  }

  public function show($id)
  {
    $this->region = Region::find($id);
    return $this->region;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->region = Region::find($id);
    $this->region = $this->region->update($request->all());
    return $this->region;

  }

  public function destroy($id)
  {
    $this->region = Region::find($id);
    $this->region = $this->region->delete();
  }
}
