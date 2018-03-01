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

class LibroCompra extends Authenticatable implements AuthenticatableContract,
                                    AuthorizableContract
{
    use  Authorizable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'librocompra';
    protected $fillable = ['id','fecha_factura_DUI','nit_proveedor','nombre_razon_social','nro_factura','nro_DUI','nro_autorizacion','importe_total_compra','importe_no_sujeto_CF','subtotal','descuento_sujeto_IVA','importe_base_CF','credito_fiscal','codigo_control','tipo_compra'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $dates=['deleted_at'];
}
