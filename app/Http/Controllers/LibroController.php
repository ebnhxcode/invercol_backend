<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;

class LibroController extends Controller
{

  public function index()
  {
    $this->libros = Libro::with(['libros_cuentas.cuenta'])->get(); 
    return $this->libros;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->libro = Libro::create($request->all());
    return $this->libro;
  }

  public function show($id)
  {
    $this->libro = Libro::find($id);
    return $this->libro;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->libro = Libro::find($id);
    $this->libro = $this->libro->update($request->all());
    return $this->libro;

  }

  public function destroy($id)
  {
    $this->libro = Libro::find($id);
    $this->libro = $this->libro->delete();
  }
}
