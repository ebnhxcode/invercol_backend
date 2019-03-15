<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
  protected $table = "descuentos";
  protected $primaryKey = "descuento_id";
  protected $fillable = [

    
    'descuento_comentario',
    'descuento_fecha_ingreso',
    'descuento_monto',

    'tipo_descuento_id',


    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to


  public function tipo_descuento () {
    return $this->belongsTo(\App\Models\TipoDescuento::class, 'tipo_descuento_id');
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
