<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Models\Establecimiento;
use \App\Models\Cuenta;
use \App\Models\Libro;
use \App\Models\Region;
use \App\Models\Comuna;
use \App\Models\TipoContrato;
use \App\Models\FichaTrabajador;
use \App\Models\CuentaDependencia;
use \App\Models\Cargo;
use \App\Models\Funcion;
use \App\Models\TipoFuncion;
use \App\Models\TipoCargo;
use \App\Models\Subvencion;
use \App\Models\Rbd;



class ResourcesController extends Controller {
    

  public function subvenciones () 
  {
    $this->subvenciones = Subvencion::all();  
    return $this->subvenciones;
  }


  public function establecimientos () 
  {
    $this->establecimientos = Establecimiento::all();  
    return $this->establecimientos;
  }

  public function rbds ()
  {
    $this->rbds = Rbd::all();  
    return $this->rbds;
  }

  public function cuentas () 
  {
    $this->cuentas = Cuenta::all();  
    return $this->cuentas;
  }

  public function libros () 
  {
    $this->libros = Libro::all();  
    return $this->libros;
  }

  public function regiones () 
  {
    $this->regiones = Region::all();  
    return $this->regiones;
  }

  public function comunas () 
  {
    $this->comunas = Comuna::all();  
    return $this->comunas;
  }

  public function tipoContratos () 
  {
    $this->tipo_contratos = TipoContrato::all();  
    return $this->tipo_contratos;
  }

  public function fichaTrabajadores () 
  {
    $this->ficha_trabajadores = FichaTrabajador::all();  
    return $this->ficha_trabajadores;
  }

  public function cuentaDependencias ()
  {
    $this->cuenta_dependencias = CuentaDependencia::all();  
    return $this->cuenta_dependencias;
  }

  public function cargos ()
  {
    $this->cargos = Cargo::all();  
    return $this->cargos;
  }

  public function funciones ()
  {
    $this->funciones = Funcion::all();  
    return $this->funciones;
  }

  public function tipoFunciones ()
  {
    $this->tipo_funciones = TipoFuncion::all();
    return $this->tipo_funciones;
  }

  public function tipoCargos ()
  {
    $this->tipo_cargos = TipoCargo::all();
    return $this->tipo_cargos;
  }

}
