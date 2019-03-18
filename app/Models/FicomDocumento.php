<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FicomDocumento extends Model
{
  protected $table = "ficom_documentos";
  protected $primaryKey = "ficom_documento_id";
  protected $fillable = [

    'ficom_numero_documento',
    'ficom_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function ficom () {
    return $this->belongsTo(\App\Models\Ficom::class, 'ficom_id');
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
