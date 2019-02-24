<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
  protected $table = "comunas";
  protected $primaryKey = "comuna_id";
  protected $fillable = [
    'comuna_nombre',

    'region_id',

  ];



  # Belongs to

  public function region () {
    return $this->belongsTo(\App\Models\Region::class, 'region_id');
  }


  # Has Many
  public function establecimientos () {
    return $this->hasMany(\App\Models\Establecimiento::class, 'comuna_id');
  }


  # Has One
}
