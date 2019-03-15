<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FichaTrabajador extends Model
{
  protected $table = "ficha_trabajadores";
  protected $primaryKey = "ficha_trabajador_id";
  protected $fillable = [

    'ficha_fecha_ingreso',
    
    'sueldo_base',
    'horas_semanales',
    'horas_extras',
    'bono',

    'trabajador_id',
    'establecimiento_id',
    'tipo_contrato_id',
    'subvencion_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to

  public function trabajador () {
    return $this->belongsTo(\App\Models\Trabajador::class, 'trabajador_id');
  }

  public function establecimiento () {
    return $this->belongsTo(\App\Models\Establecimiento::class, 'establecimiento_id');
  }

  public function tipo_contrato () {
    return $this->belongsTo(\App\Models\TipoContrato::class, 'tipo_contrato_id');
  }

  public function subvencion () {
    return $this->belongsTo(\App\Models\Subvencion::class, 'subvencion_id');
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

  public function contratos () {
    return $this->hasMany(\App\Models\Contrato::class, 'ficha_trabajador_id');
  } 


  # Has One
}
