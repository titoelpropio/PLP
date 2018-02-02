<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class Detalle extends Model
{
    protected $table='detalle';
    
     protected $fillable=['id','id_cuenta','id_asiento','nro_detalle','tipo','montoSus','montoBs'];

     protected $dates = ['deleted_at'];
}
