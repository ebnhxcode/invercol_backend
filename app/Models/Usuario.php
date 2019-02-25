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

  /**
   * Usuarios
   */
  public function usuarios_creados () {
    return $this->hasMany(\App\Models\Usuario::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function usuarios_modificados () {
    return $this->hasMany(\App\Models\Usuario::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function usuarios_eliminados () {
    return $this->hasMany(\App\Models\Usuario::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Cargos
   */
  public function cargos_creados () {
    return $this->hasMany(\App\Models\Cargo::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function cargos_modificados () {
    return $this->hasMany(\App\Models\Cargo::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function cargos_eliminados () {
    return $this->hasMany(\App\Models\Cargo::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Contratos
   */
  public function contratos_creados () {
    return $this->hasMany(\App\Models\Contrato::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function contratos_modificados () {
    return $this->hasMany(\App\Models\Contrato::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function contratos_eliminados () {
    return $this->hasMany(\App\Models\Contrato::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Cuentas
   */
  public function cuentas_creados () {
    return $this->hasMany(\App\Models\Cuenta::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function cuentas_modificados () {
    return $this->hasMany(\App\Models\Cuenta::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function cuentas_eliminados () {
    return $this->hasMany(\App\Models\Cuenta::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Establecimientos
   */
  public function establecimientos_creados () {
    return $this->hasMany(\App\Models\Establecimiento::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function establecimientos_modificados () {
    return $this->hasMany(\App\Models\Establecimiento::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function establecimientos_eliminados () {
    return $this->hasMany(\App\Models\Establecimiento::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Fichas Trabajadores
   */
  public function fichas_trabajadores_creados () {
    return $this->hasMany(\App\Models\FichaTrabajador::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function fichas_trabajadores_modificados () {
    return $this->hasMany(\App\Models\FichaTrabajador::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function fichas_trabajadores_eliminados () {
    return $this->hasMany(\App\Models\FichaTrabajador::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Ingresos
   */
  public function ingresos_creados () {
    return $this->hasMany(\App\Models\Ingreso::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function ingresos_modificados () {
    return $this->hasMany(\App\Models\Ingreso::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function ingresos_eliminados () {
    return $this->hasMany(\App\Models\Ingreso::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Libros
   */
  public function libros_creados () {
    return $this->hasMany(\App\Models\Libro::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function libros_modificados () {
    return $this->hasMany(\App\Models\Libro::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function libros_eliminados () {
    return $this->hasMany(\App\Models\Libro::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Libros Cuentas
   */
  public function libros_cuentas_creados () {
    return $this->hasMany(\App\Models\LibroCuenta::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function libros_cuentas_modificados () {
    return $this->hasMany(\App\Models\LibroCuenta::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function libros_cuentas_eliminados () {
    return $this->hasMany(\App\Models\LibroCuenta::class, 'usuario_id', 'eliminado_por_usuario_id');
  }


  /**
   * Subvenciones
   */
  public function subvenciones_creados () {
    return $this->hasMany(\App\Models\Subvencion::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function subvenciones_modificados () {
    return $this->hasMany(\App\Models\Subvencion::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function subvenciones_eliminados () {
    return $this->hasMany(\App\Models\Subvencion::class, 'usuario_id', 'eliminado_por_usuario_id');
  }


  /**
   * Tipos Contratos
   */
  public function tipos_contratos_creados () {
    return $this->hasMany(\App\Models\TipoContrato::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function tipos_contratos_modificados () {
    return $this->hasMany(\App\Models\TipoContrato::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function tipos_contratos_eliminados () {
    return $this->hasMany(\App\Models\TipoContrato::class, 'usuario_id', 'eliminado_por_usuario_id');
  }





  /**
   * Tipos Documentos
   */
  public function tipos_documentos_creados () {
    return $this->hasMany(\App\Models\TipoDocumento::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function tipos_documentos_modificados () {
    return $this->hasMany(\App\Models\TipoDocumento::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function tipos_documentos_eliminados () {
    return $this->hasMany(\App\Models\TipoDocumento::class, 'usuario_id', 'eliminado_por_usuario_id');
  }


  /**
   * Libros Tipos Documentos
   */
  public function libros_tipos_documentos_creados () {
    return $this->hasMany(\App\Models\LibroTipoDocumento::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function libros_tipos_documentos_modificados () {
    return $this->hasMany(\App\Models\LibroTipoDocumento::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function libros_tipos_documentos_eliminados () {
    return $this->hasMany(\App\Models\LibroTipoDocumento::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Cuenta Dependencias
   */
  public function cuenta_dependencias_creados () {
    return $this->hasMany(\App\Models\CuentaDependencia::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function cuenta_dependencias_modificados () {
    return $this->hasMany(\App\Models\CuentaDependencia::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function cuenta_dependencias_eliminados () {
    return $this->hasMany(\App\Models\CuentaDependencia::class, 'usuario_id', 'eliminado_por_usuario_id');
  }


  /**
   * Permisos
   */
  public function permisos_creados () {
    return $this->hasMany(\App\Models\Permiso::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function permisos_modificados () {
    return $this->hasMany(\App\Models\Permiso::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function permisos_eliminados () {
    return $this->hasMany(\App\Models\Permiso::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  /**
   * Roles
   */
  public function roles_creados () {
    return $this->hasMany(\App\Models\Role::class, 'usuario_id', 'creado_por_usuario_id');
  }

  public function roles_modificados () {
    return $this->hasMany(\App\Models\Role::class, 'usuario_id', 'modificado_por_usuario_id');
  }

  public function roles_eliminados () {
    return $this->hasMany(\App\Models\Role::class, 'usuario_id', 'eliminado_por_usuario_id');
  }

  # Has One
  
}
