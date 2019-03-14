<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoFuncion extends Model
{
  protected $table = "tipo_funciones";
  protected $primaryKey = "tipo_funcion_id";
  protected $fillable = [
    'tipo_funcion_codigo',
    'tipo_funcion_nombre',
    'tipo_funcion_descripcion',

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
  public function funciones () {
    return $this->belongsTo(\App\Models\Funcion::class, 'tipo_funcion_id');
  }

  

  # Has One
}
