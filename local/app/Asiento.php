<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
 
   protected $table = 'asiento';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','nro_asiento','tipo','glosa','fecha_creacion','fecha_transaccion','cambio_tipo','estado','motivo_anulado','id_categoria','id_gestion','id_moneda','id_usuario'];
    protected $dates=['deleted_at'];
}
