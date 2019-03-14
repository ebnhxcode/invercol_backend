<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Role;

class RoleController extends Controller
{
  public function index()
  {
    $this->roles = Role::all(); 
    return $this->roles;
  }

  public function create()
  {

  }

  public function store(Request $request)
  {
    $this->role = Role::create($request->all());
    return $this->role;
  }

  public function show($id)
  {
    $this->role = Role::find($id);
    return $this->role;
  }


  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $this->role = Role::find($id);
    $this->role = $this->role->update($request->all());
    return response()->json($this->role);

  }

  public function destroy($id)
  {
    $this->role = Role::find($id);
    $this->role = $this->role->delete();
  }
}
