<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FichaTrabajador extends Model
{
  protected $table = "ficha_trabajadores";
  protected $primaryKey = "ficha_trabajador_id";
  protected $fillable = [
    'ficha_rut',
    'ficha_dv',

    'ficha_genero',
    'ficha_nombre',
    'ficha_apellido_paterno',
    'ficha_apellido_materno',

    'ficha_fecha_nacimiento',


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
