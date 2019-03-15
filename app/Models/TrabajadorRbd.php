<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrabajadorRbd extends Model
{
  protected $table = "trabajadores_rbds";
  protected $primaryKey = "trabajador_rbd_id";
  protected $fillable = [

    'ficha_trabajador_id',
    'rbd_id',


    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',


  ];



  # Belongs to


  public function rbd () {
    return $this->belongsTo(\App\Models\Rbd::class, 'rbd_id');
  }

  public function ficha_trabajador () {
    return $this->belongsTo(\App\Models\FichaTrabajador::class, 'ficha_trabajador_id');
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
