<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Subvencion;

class SubvencionController extends Controller
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
    $this->subvenciones = new Subvencion(); 

    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'subvenciones'=>$this->subvenciones->paginate((int)$this->per_page),
      ]);
    }

    return $this->subvenciones->get();
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->subvencion = Subvencion::create($request->all());
    return $this->subvencion;
  }

  public function show($id)
  {
    $this->subvencion = Subvencion::find($id);
    return $this->subvencion;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->subvencion = Subvencion::find($id);
    $this->subvencion = $this->subvencion->update($request->all());
    return response()->json($this->subvencion);

  }

  public function destroy($id)
  {
    $this->subvencion = Subvencion::find($id);
    $this->subvencion = $this->subvencion->delete();
  }
}
