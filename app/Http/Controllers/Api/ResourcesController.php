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



class ResourcesController extends Controller {
    

  public function establecimientos () 
  {
    $this->establecimientos = Establecimiento::all();  
    return $this->establecimientos;
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

}
