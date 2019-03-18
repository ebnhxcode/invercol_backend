<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RbdProveedor extends Model
{
  protected $table = "rbd_proveedores";
  protected $primaryKey = "rbd_proveedor_id";
  protected $fillable = [

    'rbd_id',
    'proveedor_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',

  ];



  # Belongs to

  public function rbd () {
    return $this->belongsTo(\App\Models\Rbd::class, 'rbd_id');
  }

  public function proveedor () {
    return $this->belongsTo(\App\Models\Proveedor::class, 'proveedor_id');
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
