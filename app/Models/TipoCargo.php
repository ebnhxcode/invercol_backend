<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCargo extends Model {
  protected $table = "tipo_cargos";
  protected $primaryKey = "tipo_cargo_id";
  protected $fillable = [
    'tipo_cargo_nombre',
    'tipo_cargo_descripcion',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  # Has Many
  public function cargos () {
    return $this->hasMany(\App\Models\Cargo::class, 'tipo_cargo_id');
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

  # Has One

}
