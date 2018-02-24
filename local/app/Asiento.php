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

class Asiento extends Authenticatable implements AuthenticatableContract,
                                    AuthorizableContract
{
    use  Authorizable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'asiento';
    protected $fillable = ['id','nro_asiento','tipo','glosa','fecha_creacion','fecha_transaccion','cambio_tipo','estado','motivo_anulado','id_categoria','id_gestion','id_tipo_cambio','id_usuario','id_moneda'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $dates=['deleted_at'];
}
