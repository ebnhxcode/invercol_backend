<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subvencion extends Model
{
  protected $table = "subvenciones";
  protected $primaryKey = "subvencion_id";
  protected $fillable = [
    'subvencion_codigo',
    'subvencion_nombre',

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



  # Has One
}
