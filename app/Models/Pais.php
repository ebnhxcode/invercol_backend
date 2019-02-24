<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {
  protected $table = "paises";
  protected $primaryKey = "pais_id";
  protected $fillable = [
    'pais_nombre',

    'continente_id',
  ];



  # Belongs to
  public function continente () {
    return $this->hasMany(\App\Models\Continente::class, 'continente_id');
  }

  # Has Many
  public function regiones () {
    return $this->hasMany(\App\Models\Region::class, 'pais_id');
  }


  # Has One
}
