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

class Detalle extends Authenticatable implements AuthenticatableContract,
                                    AuthorizableContract
{
    use  Authorizable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='detalle';
    protected $fillable=['id','id_cuenta','id_asiento','nro_detalle','tipo','montoSus','montoBs','id_centro_costo'
    
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $dates=['deleted_at'];
}
