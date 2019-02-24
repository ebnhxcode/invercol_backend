<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
  protected $table = "regiones";
  protected $primaryKey = "region_id";
  protected $fillable = [
    'region_nombre',
    'region_alias',
    'region_orden',

    'pais_id'

  ];



  # Belongs to
  public function pais () {
    return $this->hasMany(\App\Models\Pais::class, 'pais_id');
  }

  # Has Many
  public function comunas () {
    return $this->hasMany(\App\Models\Comuna::class, 'region_id');
  }

  public function establecimientos () {
    return $this->hasMany(\App\Models\Establecimiento::class, 'region_id');
  }


  # Has One
}
