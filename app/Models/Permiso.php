<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
  protected $table = "permisos";
  protected $primaryKey = "permiso_id";
  protected $fillable = [
    'permiso_nombre',
    'permiso_descripcion',

    'permiso_nivel',
    'permiso_orden',

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

  public function roles () {
    return $this->hasMany(\App\Models\Role::class, 'permiso_id');
  }



  # Has One
}
