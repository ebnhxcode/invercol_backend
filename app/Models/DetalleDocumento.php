<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleDocumento extends Model
{
  protected $table = "detalle_documentos";
  protected $primaryKey = "detalle_documento_id";
  protected $fillable = [
    'detalle_documento_numero',
    'detalle_documento_gasto',

    'documento_id',
    'subvencion_id',
    'cuenta_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',

  ];



  # Belongs to

  public function documento () {
    return $this->belongsTo(\App\Models\Documento::class, 'documento_id');
  }

  public function subvencion () {
    return $this->belongsTo(\App\Models\Subvencion::class, 'subvencion_id');
  }

  public function cuenta () {
    return $this->belongsTo(\App\Models\Cuenta::class, 'cuenta_id');
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
