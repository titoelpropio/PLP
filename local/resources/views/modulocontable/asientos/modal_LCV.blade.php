<div class="modal fade" id="myModal_LV" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">LIBRO DE VENTA</h4>
	        <H5 class="modal-title">(AGREGAR MOTOS EN BOLIVIANOS)</H5>
      </div>

      <div class="modal-body">

      	    <div class="form-group">
                <label for="fecha_factura_LV">FECHA DE LA FACTURA:</label>
                <input type="date" id="fecha_factura_LV" name="fecha_factura_LV" class="form-control">
            </div>
      
			<div class="form-group">
			    <label for="nro_factura_LV">N° DE LA FACTURA:</label>
			    <input type="text" value="" name="nro_factura_LV" id="nro_factura_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="nro_autorizacion_LV">N° DE AUTORIZACIÓN:</label>
			    <input type="text" value="" name="nro_autorizacion_LV" id="nro_autorizacion_LV"  class="form-control">
			</div>

			<div class="form-group" >
                <label for="estado_LV">ESTADO:</label>
                <select name="estado_LV" id="estado_LV" class="form-control">
                    <option value="V">V: VÁLIDA</option>
                    <option value="A">A: ANULADA</option>
                    <option value="E">E: EXTRAVIADA</option>
                    <option value="N">N: NO UTILIZADA</option>
                    <option value="C">C: EMITIDA POR CONTINGENCIA</option>
                    <option value="L">L: LIBRE CONSIGNACIÓN</option>
                </select>
            </div>

            <div class="form-group">
			    <label for="nit_ci_cliente_LV">NIT/CI CLIENTE:</label>
			    <input type="text" value="" name="nit_ci_cliente_LV" id="nit_ci_cliente_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="nombre_razon_social_LV">NOMBRE O RAZÓN SOCIAL:</label>
			    <input type="text" value="" name="nombre_razon_social_LV" id="nombre_razon_social_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="importe_total_venta_LV">IMPORTE TOTAL DE LA VENTA:</label>
			    <input type="text" value="" name="importe_total_venta_LV" id="importe_total_venta_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="importe_no_sujeto_IVA_LV">IMPORTE ICE/IEHD/IPJ/TASAS/OTROS NO SUJETOS AL IVA:</label>
			    <input type="text" value="0.00" name="importe_no_sujeto_IVA_LV" id="importe_no_sujeto_IVA_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="exportaciones_operaciones_exentas_LV">EXPORTACIONES Y OPERACIONES EXENTAS:</label>
			    <input type="text" value="0.00" name="exportaciones_operaciones_exentas_LV" id="exportaciones_operaciones_exentas_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="ventas_gravadas_TC_LV">VENTAS GRAVADAS A TASA CERO:</label>
			    <input type="text" value="0.00" name="ventas_gravadas_TC_LV" id="ventas_gravadas_TC_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="subtotal_LV">SUBTOTAL:</label>
			    <input type="text" value="" name="subtotal_LV" id="subtotal_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="descuento_sujeto_IVA_LV">DESCUENTOS, BONIFICACIONES Y REBAJAS SUJETAS AL IVA:</label>
			    <input type="text" value="0.00" name="descuento_sujeto_IVA_LV" id="descuento_sujeto_IVA_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="importe_base_DF_LV">IMPORTE BASE PARA DÉBITO FISCAL:</label>
			    <input type="text" value="" name="importe_base_DF_LV" id="importe_base_DF_LV"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="debito_fiscal_LV">DÉBITO FISCAL:</label>
			    <input type="text" value="" name="debito_fiscal_LV" id="debito_fiscal_LV"  class="form-control">
			</div>

			<div class="form-group" >
                <label for="tipo_factura_LV">TIPO DE FACTURA:</label>
                <select name="tipo_factura_LV" id="tipo_factura_LV" class="form-control" onchange="tipo_factura_venta()">
                    <option value="1">MANUAL</option>
                    <option value="2">COMPUTARIZADA</option>
                </select>
            </div>

			<div class="form-group">
			    <label for="codigo_control_LV">CÓDIGO DE CONTROL:</label>
			    <input type="text" value="" name="codigo_control_LV" id="codigo_control_LV"  class="form-control" readonly>
			</div>

      </div>

      <div class="modal-footer">
           <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="myModal_LC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">LIBRO DE COMPRA</h4>
	        <H5 class="modal-title">(AGREGAR MOTOS EN BOLIVIANOS)</H5>
      </div>

      <div class="modal-body">
      
			<div class="form-group">
                <label for="fecha_factura_DUI_LC">FECHA DE LA FACTURA O DUI:</label>
                <input type="date" id="fecha_factura_DUI_LC" name="fecha_factura_DUI_LC" class="form-control">
            </div>

			<div class="form-group">
			    <label for="nit_proveedor_LC">NIT PROVEEDOR:</label>
			    <input type="text" value="" name="nit_proveedor_LC" id="nit_proveedor_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="nombre_razon_social_LC">NOMBRE Y APELLIDOS/RAZÓN SOCIAL:</label>
			    <input type="text" value="" name="nombre_razon_social_LC" id="nombre_razon_social_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="nro_factura_LC">N° DE LA FACTURA:</label>
			    <input type="text" value="" name="nro_factura_LC" id="nro_factura_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="nro_DUI_LC">N° DE DUI:</label>
			    <input type="text" value="0" name="nro_DUI_LC" id="nro_DUI_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="nro_autorizacion_LC">N° DE AUTORIZACIÓN:</label>
			    <input type="text" value="" name="nro_autorizacion_LC" id="nro_autorizacion_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="importe_total_compra_LC">IMPORTE TOTAL DE LA COMPRA:</label>
			    <input type="text" value="" name="importe_total_compra_LC" id="importe_total_compra_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="importe_no_sujeto_CF_LC">IMPORTE NO SUJETO A CRÉDITO FISCAL:</label>
			    <input type="text" value="0.00" name="importe_no_sujeto_CF_LC" id="importe_no_sujeto_CF_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="subtotal_LC">SUBTOTAL:</label>
			    <input type="text" value="" name="subtotal_LC" id="subtotal_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="descuento_sujeto_IVA_LC">DESCUENTOS, BONIFICACIONES Y REBAJAS SUJETAS AL IVA:</label>
			    <input type="text" value="0.00" name="descuento_sujeto_IVA_LC" id="descuento_sujeto_IVA_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="importe_base_CF_LC">IMPORTE BASE PARA CRÉDITO FISCAL:</label>
			    <input type="text" value="" name="importe_base_CF_LC" id="importe_base_CF_LC"  class="form-control">
			</div>

			<div class="form-group">
			    <label for="credito_fiscal_LC">CRÉDITO FISCAL:</label>
			    <input type="text" value="" name="credito_fiscal_LC" id="credito_fiscal_LC"  class="form-control">
			</div>

			<div class="form-group" >
                <label for="tipo_compra_LC">TIPO DE COMPRA:</label>
                <select name="tipo_compra_LC" id="tipo_compra_LC" class="form-control">
                    <option value="1">1. INTERNO / ACTIVIDADES GRABADAS</option>
                    <option value="2">2. INTERNO / ACTIVIDADES NO GRABADAS</option>
                    <option value="3">3. SUJETAS A PROPORCIONALIDAD</option>
                    <option value="4">4. EXPORTACIONES</option>
                    <option value="5">5. INTERNO Y EXPORTACIONES</option>
                </select>
            </div>

            <div class="form-group" >
                <label for="tipo_factura_LC">TIPO DE FACTURA:</label>
                <select name="tipo_factura_LC" id="tipo_factura_LC" class="form-control" onchange="tipo_factura_compra()">
                    <option value="1">MANUAL</option>
                    <option value="2">COMPUTARIZADA</option>
                </select>
            </div>

			<div class="form-group">
			    <label for="codigo_control_LC">CÓDIGO DE CONTROL:</label>
			    <input type="text" value="" name="codigo_control_LC" id="codigo_control_LC"  class="form-control" readonly>
			</div>

      </div>

      <div class="modal-footer">
           <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>