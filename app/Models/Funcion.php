<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
  protected $table = "funciones";
  protected $primaryKey = "funcion_id";
  protected $fillable = [
    'funcion_codigo',
    'funcion_nombre',
    'funcion_descripcion',


    'tipo_funcion_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function tipo_funcion () {
    return $this->belongsTo(\App\Models\TipoFuncion::class, 'tipo_funcion_id');
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
