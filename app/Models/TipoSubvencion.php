<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSubvencion extends Model
{
  protected $table = "tipo_subvenciones";
  protected $primaryKey = "tipo_subvencion_id";
  protected $fillable = [
    'tipo_subvencion_codigo',
    'tipo_subvencion_nombre',
    'tipo_subvencion_descripcion',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  # Has Many
  public function subvenciones () {
    return $this->hasMany(\App\Models\TipoSubvencion::class, 'tipo_subvencion_id');
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
