<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CargoFuncion extends Model
{
  protected $table = "cargo_funciones";
  protected $primaryKey = "cargo_funcion_id";
  protected $fillable = [
    'cargo_id',
    'funcion_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function cargo () {
    return $this->belongsTo(\App\Models\Cargo::class, 'cargo_id');
  }

  public function funcion () {
    return $this->belongsTo(\App\Models\Funcion::class, 'funcion_id');
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
