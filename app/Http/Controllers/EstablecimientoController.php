<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Establecimiento;

class EstablecimientoController extends Controller
{

  private $per_page;

  public function validatePagination ($request) {
    if (!$request->per_page) {
        $this->per_page = 10;
    } else {
        $this->per_page = $request->per_page;
    }
  }

  public function index(Request $request)
  {
    $this->validatePagination($request);

    $this->establecimientos = Establecimiento::with(['region', 'comuna']); 

    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'establecimientos'=>$this->establecimientos->paginate((int)$this->per_page),
      ]);
    }

    return $this->establecimientos->get();
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->establecimiento = Establecimiento::create($request->all());
    return $this->establecimiento;
  }

  public function show($id)
  {
    $this->establecimiento = Establecimiento::find($id);
    return $this->establecimiento;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->establecimiento = Establecimiento::find($id);
    $this->establecimiento = $this->establecimiento->update($request->all());
    return response()->json($this->establecimiento);

  }

  public function destroy($id)
  {
    $this->establecimiento = Establecimiento::find($id);
    $this->establecimiento = $this->establecimiento->delete();
  }
}
