<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Continente extends Model
{
  protected $table = "continentes";
  protected $primaryKey = "continente_id";
  protected $fillable = [
    'continente_nombre',
  ];



  # Belongs to


  # Has Many
  public function paises () {
    return $this->hasMany(\App\Models\Pais::class, 'continente_id');
  }


  # Has One
}
