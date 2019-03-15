<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rbd extends Model
{
  protected $table = "rbds";
  protected $primaryKey = "rbd_id";
  protected $fillable = [
    'rbd_codigo',
    'rbd_nombre',
    'rbd_descripcion',

    'establecimiento_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function establecimiento () {
    return $this->belongsTo(\App\Models\Establecimiento::class, 'establecimiento_id');
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
