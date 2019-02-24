<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
  protected $table = "libros";
  protected $primaryKey = "libro_id";
  protected $fillable = [
    'libro_codigo',
    'libro_nombre',
    'libro_descripcion',


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

  public function libros_cuentas () {
    return $this->hasMany(\App\Models\LibroCuenta::class, 'libro_id');
  }


  # Has One
}
