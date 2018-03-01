<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class LibroVenta extends Authenticatable implements AuthenticatableContract,
                                    AuthorizableContract
{
    use  Authorizable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'libroventa';
    protected $fillable = ['id','fecha_factura','nro_factura','nro_autorizacion','estado','nit_ci_cliente','nombre_razon_social','importe_total_venta','importe_no_sujeto_IVA','exportaciones_operaciones_exentas','ventas_gravadas_TC','subtotal','descuento_sujeto_IVA','importe_base_DF','debito_fiscal','codigo_control'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $dates=['deleted_at'];
}
