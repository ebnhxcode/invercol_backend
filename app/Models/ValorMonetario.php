<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValorMonetario extends Model
{
    protected $table = "valores_monetarios";
    protected $primaryKey = "valor_monetario_id";
    protected $fillable = [
      'valor_monetario_codigo',
      'valor_monetario_nombre',
      'valor_monetario_descripcion',
  
  
      'tipo_valor_monetario_id',
  
      'creado_por_usuario_id',
      'modificado_por_usuario_id',
      'eliminado_por_usuario_id',
  
  
    ];
  
  
  
    # Belongs to
  
    public function tipo_valor_monetario () {
      return $this->belongsTo(\App\Models\TipoValorMonetario::class, 'tipo_valor_monetario_id');
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
