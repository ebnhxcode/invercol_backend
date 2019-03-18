<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
  protected $table = "contratos";
  protected $primaryKey = "contrato_id";
  protected $fillable = [

    'contrato_fecha_inicio',

    'contrato_sueldo_base',
    'contrato_horas_semanales',
    'contrato_horas_extras',
    'contrato_bono',
    'contrato_valor_hora',

    'rbd_id',
    'subvencion_id',
    'ficha_trabajador_id',
    'tipo_contrato_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];


  # Belongs to

  public function rbd () {
    return $this->belongsTo(\App\Models\Rbd::class, 'rbd_id');
  }

  public function subvencion () {
    return $this->belongsTo(\App\Models\Subvencion::class, 'subvencion_id');
  }

  public function ficha_trabajador () {
    return $this->belongsTo(\App\Models\FichaTrabajador::class, 'ficha_trabajador_id');
  }

  public function tipo_contrato () {
    return $this->belongsTo(\App\Models\TipoContrato::class, 'tipo_contrato_id');
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
