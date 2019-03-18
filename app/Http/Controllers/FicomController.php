<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Ficom;

class FicomController extends Controller
{
  public function index()
  {
    $this->ficoms = Ficom::all(); 
    return $this->ficoms;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->ficom = Ficom::create($request->all());
    return $this->ficom;
  }

  public function show($id)
  {
    $this->ficom = Ficom::find($id);
    return $this->ficom;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->ficom = Ficom::find($id);
    $this->ficom = $this->ficom->update($request->all());
    return response()->json($this->ficom);

  }

  public function destroy($id)
  {
    $this->ficom = Ficom::find($id);
    $this->ficom = $this->ficom->delete();
  }
}
