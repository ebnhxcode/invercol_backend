<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
  protected $table = "documentos";
  protected $primaryKey = "documento_id";
  protected $fillable = [

    'documento_fecha',
    'documento_fecha_ingreso',


    'documento_descripcion',

    'documento_monto',
    'documento_numero',

    'tipo_documento_id',
    'rbd_id',
    'proveedor_id',
    'libro_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];


  # Belongs to


  public function tipo_documento () {
    return $this->belongsTo(\App\Models\TipoDocumento::class, 'tipo_documento_id');
  }

  public function rbd () {
    return $this->belongsTo(\App\Models\Rbd::class, 'rbd_id');
  }

  public function proveedor () {
    return $this->belongsTo(\App\Models\Proveedor::class, 'proveedor_id');
  }

  public function libro () {
    return $this->belongsTo(\App\Models\Libro::class, 'libro_id');
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
