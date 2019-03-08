<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
  protected $table = "cuentas";
  protected $primaryKey = "cuenta_id";
  protected $fillable = [
    'cuenta_id',
    'cuenta_codigo',
    'cuenta_nombre',
    'cuenta_descripcion',

    'cuenta_titular',

    'cuenta_dependencia_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function cuenta_dependencia () {
    return $this->belongsTo(\App\Models\CuentaDependencia::class, 'cuenta_dependencia_id');
  }

  public function usuario_creador () {
    return $this->belongsTo(\App\Models\Usuario::class, 'creado_por_usuario_id');
  }

  public function usuario_modificador () {
    return $this->belongsTo(\App\Models\Usuario::class, 'modificado_por_usuario_id');
  }

  public function usuario_eliminador () {
    return $this->belongsTo(\App\Models\Usuario::class, 'eliminado_por_usuario_id');
  }



  # Has Many

  public function libros_cuentas () {
    return $this->hasMany(\App\Models\LibroCuenta::class, 'cuenta_id');
  }

  

  # Has One
}
