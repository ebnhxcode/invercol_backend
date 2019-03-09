<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {
  protected $table = "cargos";
  protected $primaryKey = "cargo_id";
  protected $fillable = [
    'cargo_codigo',
    'cargo_nombre',
    'cargo_descripcion',

    'tipo_cargo_id',


    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function tipo_cargo () {
    return $this->belongsTo(\App\Models\TipoCargo::class, 'tipo_cargo_id');
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
  public function contratos () {
    return $this->hasMany(\App\Models\Contrato::class, 'cargo_id');
  } 

  public function fichas_trabajadores () {
    return $this->hasMany(\App\Models\FichaTrabajador::class, 'cargo_id');
  } 

  # Has One

}
