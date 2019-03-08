<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\CuentaDependencia;

class CuentaDependenciaController extends Controller
{
    public function index()
    {
        $this->cuenta_dependencias = CuentaDependencia::all();
        return $this->cuenta_dependencias;
    }

    public function create()
    { }

    public function store(Request $request)
    {
        $this->cuenta_dependencia = Cuenta::create($request->all());
        return $this->cuenta_dependencia;
    }

    public function show($id)
    {
        $this->cuenta_dependencia = Cuenta::find($id);
        return $this->cuenta_dependencia;
    }


    public function edit($id)
    { }

    public function update(Request $request, $id)
    {
        $this->cuenta_dependencia = Cuenta::find($id);
        $this->cuenta_dependencia = $this->cuenta_dependencia->update($request->all());
        return response()->json($this->cuenta_dependencia);
    }

    public function destroy($id)
    {
        $this->cuenta_dependencia = Cuenta::find($id);
        $this->cuenta_dependencia = $this->cuenta_dependencia->delete();
    }
}
