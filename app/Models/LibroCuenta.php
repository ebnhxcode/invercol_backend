<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibroCuenta extends Model
{
  protected $table = "libro_cuentas";
  protected $primaryKey = "libro_cuenta_id";
  protected $fillable = [
    'libro_id',
    'cuenta_id',

    'creado_por_usuario_id',
    'modificado_por_usuario_id',
    'eliminado_por_usuario_id',

  ];



  # Belongs to

  public function libro () {
    return $this->belongsTo(\App\Models\Libro::class, 'libro_id');
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
