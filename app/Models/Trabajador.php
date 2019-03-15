<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
  protected $table = "trabajadores";
  protected $primaryKey = "trabajador_id";
  protected $fillable = [
    'trabajador_rut',
    'trabajador_dv',

    'trabajador_genero',
    'trabajador_nombre',
    'trabajador_apellido_paterno',
    'trabajador_apellido_materno',
    'trabajador_fecha_nacimiento',

    'cargo_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to


  public function cargo () {
    return $this->belongsTo(\App\Models\Cargo::class, 'cargo_id');
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

  public function fichas_trabajador () {
    return $this->hasMany(\App\Models\FichaTrabajador::class, 'trabajador_id');
  }


  # Has One
}
