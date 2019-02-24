<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
  use Notifiable;
  protected $primaryKey = "usuario_id";
  protected $table = "usuarios";

  protected $fillable = [
      'usuario_nombre', 
      'usuario_email', 
      'password',

      'role_id',
      'estado_id',
      'tipo_usuario_id',

      'creado_por_usuario_id',
      'modificado_por_usuario_id',
      'eliminado_por_usuario_id',

  ];

  protected $hidden = [
      'password', 'remember_token',
  ];

  

  # Belongs To

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
