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
use DB;
class Venta extends Authenticatable implements AuthenticatableContract,
                                    AuthorizableContract

{
    use  Authorizable, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $table = 'venta';
    protected $fillable = [
        'fecha', 'cuotaInicial', 'precio','estado','tipoPago','idEmpleado','idCliente','idLote','idTipoCambio','descuento','reserva','idAsiento','idAsiento','pagoBs','pagoUsd',
        'totalapagar','totalapagarBs','cambioBs','cambioUsd','precioBs','moneda','reservaBs','tipoVenta'
    ];
    public static function SaleAndDetalilsSaleByIdVenta( $idVenta )
    {
        return DB::select("select plandepago.montoTotalBs,totalapagar,plandepago.montoTotal,venta.moneda,venta.totalapagarBs  , venta.descuento, venta.moneda, venta.precioBs ,cliente.expedido, plandepago.cuotaInicialUsd as cuotaInicial, venta.reserva,lote.superficie,cliente.nombre,cliente.apellidos,cliente.ci,cliente.expedido,venta.precio,venta.fecha,lote.nroLote,lote.manzano,lote.fase,proyecto.nombre as nombreProyecto ,venta.id as idVenta   from cliente,venta, plandepago,lote,proyecto where venta.id=plandepago.idVenta and cliente.id=venta.idCliente and venta.id=" . $idVenta . " and venta.idLote=lote.id and proyecto.id=lote.idProyecto");
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


}