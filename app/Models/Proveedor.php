<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  protected $table = "proveedores";
  protected $primaryKey = "proveedor_id";
  protected $fillable = [
    'proveedor_nombre',
    'proveedor_rut',
    'proveedor_dv',

    'rbd_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',

  ];



  # Belongs to

  public function rbd () {
    return $this->belongsTo(\App\Models\Rbd::class, 'rbd_id');
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
