<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CuentaDependencia extends Model
{
  protected $table = "cuenta_dependencias";
  protected $primaryKey = "cuenta_dependencia_id";
  protected $fillable = [
    'cuenta_dependencia_codigo',
    'cuenta_dependencia_nombre',
    'cuenta_dependencia_descripcion',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',

  ];



  # Belongs to

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
  public function cuentas () {
    return $this->hasMany(\App\Models\Cuenta::class, 'cuenta_dependencia_id');
  } 


  # Has One
}
