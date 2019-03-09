<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoValorMonetario extends Model
{
    protected $table = "tipo_valores_monetarios";
    protected $primaryKey = "tipo_valor_monetario_id";
    protected $fillable = [
      'tipo_valor_monetario_nombre',
  
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

    public function valores_monetarios () {
        return $this->hasMany(\App\Models\ValorMonetario::class, 'tipo_valor_monetario_id');
    }

    # Has One
}
