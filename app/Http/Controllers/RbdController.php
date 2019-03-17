<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Rbd;

class RbdController extends Controller
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
    $this->rbds = Rbd::with(['establecimiento']); 

    if ($request->wantsJson() || $request->ajax() || $request->isXmlHttpRequest()) {
            
      return response()->json([
        'status'=>200,
        'msg'=>'ok',
        'rbds'=>$this->rbds->paginate((int)$this->per_page),
      ]);
    }

    return $this->rbds->get();

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
