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
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];


  # Belongs To


  
  # Has Many



  # Has One
  
}
