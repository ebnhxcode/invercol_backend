<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
  protected $table = "establecimientos";
  protected $primaryKey = "establecimiento_id";
  protected $fillable = [
    'establecimiento_rbd',
    'establecimiento_nombre',
    'establecimiento_direccion',
    'establecimiento_descripcion',

    'region_id',
    'comuna_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to


  public function region () {
    return $this->belongsTo(\App\Models\Region::class, 'region_id');
  }

  public function comuna () {
    return $this->belongsTo(\App\Models\Comuna::class, 'comuna_id');
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



  # Has One
}
