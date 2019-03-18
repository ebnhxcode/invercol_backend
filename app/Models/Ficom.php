<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ficom extends Model
{
  protected $table = "ficoms";
  protected $primaryKey = "ficom_id";
  protected $fillable = [

    'ficom_tiene_run',
    'ficom_run',
    'ficom_dv',
    'ficom_anio',

    'ficom_monto',
    'ficom_interes',
    'ficom_mensualidades',

    'rbd_id',
    'tipo_documento_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function rbd () {
    return $this->belongsTo(\App\Models\Rbd::class, 'rbd_id');
  }

  public function tipo_documento () {
    return $this->belongsTo(\App\Models\TipoDocumento::class, 'tipo_documento_id');
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
