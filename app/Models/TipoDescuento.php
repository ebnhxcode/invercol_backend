<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDescuento extends Model
{
  protected $table = "tipo_descuentos";
  protected $primaryKey = "tipo_descuento_id";
  protected $fillable = [

    'tipo_descuento_codigo',
    'tipo_descuento_nombre',


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

  public function descuentos () {
    return $this->hasMany(\App\Models\Descuento::class, 'descuento_id');
  }


  # Has One
}
