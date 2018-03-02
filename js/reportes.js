$(document).ready(function () {

    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth() + 1; //hoy es 0!
    var yyyy = hoy.getFullYear();

    if (dd < 10) {
        dd = '0' + dd
    }

    if (mm < 10) {
        mm = '0' + mm
    }

    hoy = yyyy + '-' + mm + '-' + dd;
    $('#fecha_in').val(hoy);
    $('#fecha_fi').val(hoy);
});

function reporte_libro_venta(verificar) {

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    $('#tabla').empty();

    var tabla = $('#tabla');
    var total_filas = 0;
    var fila = 1;
    $('#loading').css("display", "block");
    $.get('reporte_libro_venta/' + fecha1 + '/' + fecha2, function (response) {

        if(Object.keys(response).length > 0) {
            total_filas = Object.keys(response).length;

            for (var i = 0; i < total_filas; i++) {

                tabla.append("<tr >\n\
                <td style='display:none;'>" + 3 + "</td>\n\
                <td>" + fila + "</td>\n\
                <td>" + response[i].fecha_factura + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].nro_factura + "</td>\n\
                <td>" + response[i].nro_autorizacion + "</td>\n\
                <td>" + response[i].estado + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].nit_ci_cliente + "</td>\n\
                <td>" + response[i].nombre_razon_social + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].importe_total_venta + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].importe_no_sujeto_IVA + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].exportaciones_operaciones_exentas + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].ventas_gravadas_TC + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].subtotal + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].descuento_sujeto_IVA + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].importe_base_DF + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].debito_fiscal + "</td>\n\
                <td>" + response[i].codigo_control + "</td>\n\
                <tr>");

                fila++;
            }
        }

        $('#loading').css("display", "none");
    });
}

function reporte_libro_compra(verificar) {

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    $('#tabla').empty();

    var tabla = $('#tabla');
    var total_filas = 0;
    var fila = 1;
    $('#loading').css("display", "block");
    $.get('reporte_libro_compra/' + fecha1 + '/' + fecha2, function (response) {

        if(Object.keys(response).length > 0) {
            total_filas = Object.keys(response).length;

            for (var i = 0; i < total_filas; i++) {

                tabla.append("<tr >\n\
                <td style='display:none;'>" + 1 + "</td>\n\
                <td>" + fila + "</td>\n\
                <td>" + response[i].fecha_factura_DUI + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].nit_proveedor + "</td>\n\
                <td>" + response[i].nombre_razon_social + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].nro_factura + "</td>\n\
                <td>" + response[i].nro_DUI + "</td>\n\
                <td>" + response[i].nro_autorizacion + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].importe_total_compra + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].importe_no_sujeto_CF + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].subtotal + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].descuento_sujeto_IVA + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].importe_base_CF + "</td>\n\
                <td style = 'text-align: right;'>" + response[i].credito_fiscal + "</td>\n\
                <td>" + response[i].codigo_control + "</td>\n\
                <td>" + response[i].tipo_compra + "</td>\n\
                <tr>");

                fila++;
            }
        }

        $('#loading').css("display", "none");
    });
}

function reporte_libro_diario(verificar) {

    var total_debe = 0.00;
    var total_haber = 0.00;
    var total_total_debe = 0.00;
    var total_total_haber = 0.00;

    var total_debeBs = 0.00;
    var total_haberBs = 0.00;
    var total_total_debeBs = 0.00;
    var total_total_haberBs = 0.00;

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    $('#tabla').empty();
    
    var tabla = $('#tabla');
    var total_filas = 0;
    var tipo_asiento = "";
    $('#loading').css("display", "block");
    $.get('reporte_libro_diario/' + fecha1 + '/' + fecha2, function (response) {

        if(Object.keys(response).length > 0) {
            total_filas = Object.keys(response).length;

            for (var i = 0; i < total_filas; i++) {

                if (i < total_filas - 1){

                    if (response[i].nro_detalle == 1) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i].fecha_transaccion + "</b></td>\n\
                        <td style = 'text-align: center; vertical-align: middle;'><b>Asiento " + response[i].nro_asiento + "</b></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <tr>");

                        if(response[i].tipo_detalle == 1){
                            tabla.append("<tr >\n\
                            <td></td>\n\
                            <td>" + response[i].nombre + "</td>\n\
                            <td>" + response[i].codigo + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                            <td></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i].montoBs);
                        }
                        else if(response[i].tipo_detalle == 2){
                            tabla.append("<tr >\n\
                            <td></td>\n\
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + response[i].nombre + "</td>\n\
                            <td>" + response[i].codigo + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i].montoBs);
                        }

                        
                    } 
                    else if (response[i].nro_asiento != response[i + 1].nro_asiento) {

                        if(response[i].tipo_detalle == 1){
                            tabla.append("<tr >\n\
                            <td></td>\n\
                            <td>" + response[i].nombre + "</td>\n\
                            <td>" + response[i].codigo + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                            <td></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i].montoBs);
                        }
                        else if(response[i].tipo_detalle == 2){
                            tabla.append("<tr >\n\
                            <td></td>\n\
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + response[i].nombre + "</td>\n\
                            <td>" + response[i].codigo + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i].montoBs);
                        }

                        if (response[i].tipo_asiento == 1) {
                            tipo_asiento = "Ingreso";
                        }
                        else if (response[i].tipo_asiento == 2) {
                            tipo_asiento = "Egreso";
                        }
                        else if (response[i].tipo_asiento == 3) {
                            tipo_asiento = "Traspaso";
                        }

                        tabla.append("<tr>\n\
                        <td><b>Tipo:</b>&nbsp;" + tipo_asiento + "</td>\n\
                        <td><b>Glosa:</b>&nbsp;" + response[i].glosa + "</td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <tr>");

                        tabla.append("<tr style='background-color: #5CD9EF'>\n\
                        <td colspan='3'><b>TOTAL ASIENTO</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_debe.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_haber.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_debeBs.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_haberBs.toFixed(2) + "</b></td>\n\
                        <tr>");
                        total_debe = 0;
                        total_haber = 0;
                        total_debeBs = 0;
                        total_haberBs = 0;

                    } 
                    else if (response[i].nro_asiento == response[i + 1].nro_asiento) {

                        if(response[i].tipo_detalle == 1){
                            tabla.append("<tr >\n\
                            <td></td>\n\
                            <td>" + response[i].nombre + "</td>\n\
                            <td>" + response[i].codigo + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                            <td></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i].montoBs);
                        }
                        else if(response[i].tipo_detalle == 2){
                            tabla.append("<tr >\n\
                            <td></td>\n\
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + response[i].nombre + "</td>\n\
                            <td>" + response[i].codigo + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                            <td></td>\n\
                            <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i].montoBs);
                        }
                    }
                }
                else if (i == total_filas - 1) {

                    if(response[i].tipo_detalle == 1){
                        tabla.append("<tr >\n\
                        <td></td>\n\
                        <td>" + response[i].nombre + "</td>\n\
                        <td>" + response[i].codigo + "</td>\n\
                        <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                        <td></td>\n\
                        <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                        <td></td>\n\
                        <tr>");
                        total_debe = total_debe + parseFloat(response[i].montoSus);
                        total_total_debe = total_total_debe + parseFloat(response[i].montoSus);
                        total_debeBs = total_debeBs + parseFloat(response[i].montoBs);
                        total_total_debeBs = total_total_debeBs + parseFloat(response[i].montoBs);
                    }
                    else if(response[i].tipo_detalle == 2){
                        tabla.append("<tr >\n\
                        <td></td>\n\
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + response[i].nombre + "</td>\n\
                        <td>" + response[i].codigo + "</td>\n\
                        <td></td>\n\
                        <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                        <td></td>\n\
                        <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                        <tr>");
                        total_haber = total_haber + parseFloat(response[i].montoSus);
                        total_total_haber = total_total_haber + parseFloat(response[i].montoSus);
                        total_haberBs = total_haberBs + parseFloat(response[i].montoBs);
                        total_total_haberBs = total_total_haberBs + parseFloat(response[i].montoBs);
                    }

                    if (response[i].tipo_asiento == 1) {
                        tipo_asiento = "Ingreso";
                    }
                    else if (response[i].tipo_asiento == 2) {
                        tipo_asiento = "Egreso";
                    }
                    else if (response[i].tipo_asiento == 3) {
                        tipo_asiento = "Traspaso";
                    }

                    tabla.append("<tr>\n\
                    <td><b>Tipo:</b>&nbsp;" + tipo_asiento + "</td>\n\
                    <td><b>Glosa:</b>&nbsp;" + response[i].glosa + "</td>\n\
                    <td></td>\n\
                    <td></td>\n\
                    <td></td>\n\
                    <td></td>\n\
                    <td></td>\n\
                    <tr>");

                    tabla.append("<tr style='background-color: #5CD9EF'>\n\
                    <td colspan='3'><b>TOTAL ASIENTO</b></td>\n\
                    <td style = 'text-align: right;'><b>" + total_debe.toFixed(2) + "</b></td>\n\
                    <td style = 'text-align: right;'><b>" + total_haber.toFixed(2) + "</b></td>\n\
                    <td style = 'text-align: right;'><b>" + total_debeBs.toFixed(2) + "</b></td>\n\
                    <td style = 'text-align: right;'><b>" + total_haberBs.toFixed(2) + "</b></td>\n\
                    <tr>");
                }
            }

            tabla.append("<tr style='background-color: #FC74A6'>\n\
            <td colspan='3'><b>TOTAL LIBRO DIARIO</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_debe.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_haber.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_debeBs.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_haberBs.toFixed(2) + "</b></td>\n\
            <tr>");
        }

        $('#loading').css("display", "none");
    });

}

function reporte_libro_mayor(verificar) {

    var total_debe = 0.00;
    var total_haber = 0.00;
    var total_total_debe = 0.00;
    var total_total_haber = 0.00;

    var total_debeBs = 0.00;
    var total_haberBs = 0.00;
    var total_total_debeBs = 0.00;
    var total_total_haberBs = 0.00;

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    var total_objetos = 0;
    var total_filas_objeto = 0;
    $('#tabla').empty();
    var tabla = $('#tabla');
    $('#loading').css("display", "block");
    $.get('reporte_libro_mayor/' + fecha1 + '/' + fecha2, function (response) {

        if(Object.keys(response).length > 0) {
            total_objetos = Object.keys(response).length;

            for (i = 0; i < total_objetos; i++) {
                total_filas_objeto = Object.keys(response[i]).length;

                for (j = 0; j < total_filas_objeto; j++) {

                    if (j == 0 && total_filas_objeto == 1) {
                        tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
                        <td></td>\n\
                        <td style = 'text-align: left;'><b>" + response[i][j].codigo + "<b></td>\n\
                        <td style = 'text-align: center;'><b>" + response[i][j].nombre + "<b></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <tr>");

                        if(response[i][j].tipo_detalle == 1){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i][j].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i][j].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i][j].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i][j].montoBs);
                        }
                        else if(response[i][j].tipo_detalle == 2){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i][j].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i][j].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i][j].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i][j].montoBs);
                        }

                        tabla.append("<tr style='background-color: #5CD9EF'>\n\
                        <td colspan='3'><b>TOTAL CUENTA</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_debe.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_haber.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_debeBs.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_haberBs.toFixed(2) + "</b></td>\n\
                        <tr>");
                    }
                    else if (j == 0 && total_filas_objeto > 1) {
                        tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
                        <td></td>\n\
                        <td style = 'text-align: left;'><b>" + response[i][j].codigo + "<b></td>\n\
                        <td style = 'text-align: center;'><b>" + response[i][j].nombre + "<b></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <td></td>\n\
                        <tr>");

                        if(response[i][j].tipo_detalle == 1){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i][j].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i][j].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i][j].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i][j].montoBs);
                        }
                        else if(response[i][j].tipo_detalle == 2){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i][j].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i][j].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i][j].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i][j].montoBs);
                        }
                    }
                    else if(j > 0 && j < total_filas_objeto - 1) {
                        if(response[i][j].tipo_detalle == 1){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i][j].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i][j].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i][j].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i][j].montoBs);
                        }
                        else if(response[i][j].tipo_detalle == 2){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i][j].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i][j].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i][j].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i][j].montoBs);
                        }
                    }
                    else if(j == total_filas_objeto - 1) {
                        if(response[i][j].tipo_detalle == 1){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <tr>");
                            total_debe = total_debe + parseFloat(response[i][j].montoSus);
                            total_total_debe = total_total_debe + parseFloat(response[i][j].montoSus);
                            total_debeBs = total_debeBs + parseFloat(response[i][j].montoBs);
                            total_total_debeBs = total_total_debeBs + parseFloat(response[i][j].montoBs);
                        }
                        else if(response[i][j].tipo_detalle == 2){
                            tabla.append("<tr'>\n\
                            <td style = 'text-align: center;'>" + response[i][j].nro_asiento + "</td>\n\
                            <td>" + response[i][j].fecha_transaccion + "</td>\n\
                            <td>" + response[i][j].glosa + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoSus + "</td>\n\
                            <td style = 'text-align: right;'></td>\n\
                            <td style = 'text-align: right;'>" + response[i][j].montoBs + "</td>\n\
                            <tr>");
                            total_haber = total_haber + parseFloat(response[i][j].montoSus);
                            total_total_haber = total_total_haber + parseFloat(response[i][j].montoSus);
                            total_haberBs = total_haberBs + parseFloat(response[i][j].montoBs);
                            total_total_haberBs = total_total_haberBs + parseFloat(response[i][j].montoBs);
                        }

                        tabla.append("<tr style='background-color: #5CD9EF'>\n\
                        <td colspan='3'><b>TOTAL CUENTA</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_debe.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_haber.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_debeBs.toFixed(2) + "</b></td>\n\
                        <td style = 'text-align: right;'><b>" + total_haberBs.toFixed(2) + "</b></td>\n\
                        <tr>");
                    }
                }
                total_debe = 0;
                total_haber = 0;
                total_debeBs = 0;
                total_haberBs = 0;
            }

            tabla.append("<tr style='background-color: #FC74A6'>\n\
            <td colspan='3'><b>TOTAL LIBRO MAYOR</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_debe.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_haber.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_debeBs.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right; vertical-align: middle;'><b>" + total_total_haberBs.toFixed(2) + "</b></td>\n\
            <tr>");
        }

        $('#loading').css("display", "none");
    });
}

function sumas_saldos(verificar) {

    var debe = 0.00;
    var haber = 0.00;
    var total_debe = 0.00;
    var total_haber = 0.00;

    var debeBs = 0.00;
    var haberBs = 0.00;
    var total_debeBs = 0.00;
    var total_haberBs = 0.00;

    var deudor = 0.00;
    var acreedor = 0.00;
    var total_deudor = 0.00;
    var total_acreedor = 0.00;

    var deudorBs = 0.00;
    var acreedorBs = 0.00;
    var total_deudorBs = 0.00;
    var total_acreedorBs = 0.00;

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    var total_objetos = 0;
    var total_filas_objeto = 0;
    $('#tabla').empty();
    var tabla = $('#tabla');
    $('#loading').css("display", "block");
    $.get('reporte_sumas_saldos/' + fecha1 + '/' + fecha2, function (response) {

        if(Object.keys(response).length > 0) {
            total_objetos = Object.keys(response).length;

            for (i = 0; i < total_objetos; i++) {
                total_filas_objeto = Object.keys(response[i]).length;

                for (j = 0; j < total_filas_objeto; j++) {

                    if (response[i][j].tipo_detalle == 1) {
                        debe = debe + parseFloat(response[i][j].montoSus);
                        debeBs = debeBs + parseFloat(response[i][j].montoBs);
                    }
                    else if (response[i][j].tipo_detalle == 2) {
                        haber = haber + parseFloat(response[i][j].montoSus);
                        haberBs = haberBs + parseFloat(response[i][j].montoBs);
                    }
                }

                total_debe = total_debe + debe;
                total_debeBs = total_debeBs + debeBs;
                total_haber = total_haber + haber;
                total_haberBs = total_haberBs + haberBs;

                if (debe > haber) {
                    deudor = debe - haber;
                    deudorBs = debeBs - haberBs;
                    total_deudor = total_deudor + deudor;
                    total_deudorBs = total_deudorBs + deudorBs;

                    if (haber == 0.00) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i][0].codigo + "</b></td>\n\
                        <td><b>" + response[i][0].nombre + "<b></td>\n\
                        <td style = 'text-align: right;'>" + debe.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + deudor.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + debeBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + deudorBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <tr>");
                    }
                    else if (haber > 0.00) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i][0].codigo + "</b></td>\n\
                        <td><b>" + response[i][0].nombre + "<b></td>\n\
                        <td style = 'text-align: right;'>" + debe.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + haber.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + deudor.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + debeBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + haberBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + deudorBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <tr>");
                    }
                }
                else if (debe < haber) {
                    acreedor = haber - debe;
                    acreedorBs = haberBs - debeBs;
                    total_acreedor = total_acreedor + acreedor;
                    total_acreedorBs = total_acreedorBs + acreedorBs;

                    if (debe == 0.00) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i][0].codigo + "</b></td>\n\
                        <td><b>" + response[i][0].nombre + "<b></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + haber.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + acreedor.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + haberBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + acreedorBs.toFixed(2) + "</td>\n\
                        <tr>");
                    }
                    else if (debe > 0.00) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i][0].codigo + "</b></td>\n\
                        <td><b>" + response[i][0].nombre + "<b></td>\n\
                        <td style = 'text-align: right;'>" + debe.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + haber.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + acreedor.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + debeBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + haberBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + acreedorBs.toFixed(2) + "</td>\n\
                        <tr>");
                    }
                }
                else if (debe == haber) {
                    if (debe == 0.00 && haber == 0.00) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i][0].codigo + "</b></td>\n\
                        <td><b>" + response[i][0].nombre + "<b></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <tr>");
                    }
                    else if (debe > 0.00 && haber > 0.00) {
                        tabla.append("<tr>\n\
                        <td><b>" + response[i][0].codigo + "</b></td>\n\
                        <td><b>" + response[i][0].nombre + "<b></td>\n\
                        <td style = 'text-align: right;'>" + debe.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + haber.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'>" + debeBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'>" + haberBs.toFixed(2) + "</td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <td style = 'text-align: right;'></td>\n\
                        <tr>");
                    }
                }
                debe = 0.00;
                haber = 0.00;
                debeBs = 0.00;
                haberBs = 0.00;
                deudor = 0.00;
                acreedor = 0.00;
                deudorBs = 0.00;
                acreedorBs = 0.00;
            }
        }

        tabla.append("<tr style='background-color: #FC74A6'>\n\
        <td colspan='2'><b>TOTAL</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_debe.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_haber.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_deudor.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_acreedor.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_debeBs.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_haberBs.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_deudorBs.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right; vertical-align: middle;'><b>" + total_acreedorBs.toFixed(2) + "</b></td>\n\
        <tr>");

        $('#loading').css("display", "none");
    });
}

function estado_resultado(verificar) {

    var debe = 0.00;
    var haber = 0.00;
    var debeBs = 0.00;
    var haberBs = 0.00;

    var suma = 0.00;
    var sumaBs = 0.00;

    var total_ingresos = 0.00;
    var total_gastos = 0.00;
    var total_ingresosBs = 0.00;
    var total_gastosBs = 0.00;

    var total = 0.00;
    var totalBs = 0.00;

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    var total_objetos_ingresos = 0;
    var total_objetos_gastos = 0;
    var total_filas_objeto_ingresos = 0;
    var total_filas_objeto_gastos = 0;
    $('#tabla').empty();
    var tabla = $('#tabla');
    $('#loading').css("display", "block");
    $.get('reporte_estado_resultado/' + fecha1 + '/' + fecha2, function (response) {
      
        if(Object.keys(response).length > 0) {
            total_objetos_gastos = Object.keys(response['Gastos']).length;

            for (i = 0; i < total_objetos_gastos; i++) {
                total_filas_objeto_gastos = Object.keys(response['Gastos'][i]).length;

                for (j = 0; j < total_filas_objeto_gastos; j++) {

                    if (response['Gastos'][i][j].tipo_detalle == 1) {
                        debe = debe + parseFloat(response['Gastos'][i][j].montoSus);
                        debeBs = debeBs + parseFloat(response['Gastos'][i][j].montoBs);
                    }
                    else if (response['Gastos'][i][j].tipo_detalle == 2) {
                        haber = haber + parseFloat(response['Gastos'][i][j].montoSus);
                        haberBs = haberBs + parseFloat(response['Gastos'][i][j].montoBs);
                    }
                }

                suma = debe - haber;
                sumaBs = debeBs - haberBs;
                total_gastos = total_gastos + suma;
                total_gastosBs = total_gastosBs + sumaBs;

                tabla.append("<tr>\n\
                <td><b>" + response['Gastos'][i][0].codigo + "</b></td>\n\
                <td><b>" + response['Gastos'][i][0].nombre + "<b></td>\n\
                <td style = 'text-align: right;'>" + suma.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + sumaBs.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <tr>");
                
                debe = 0.00;
                haber = 0.00;
                debeBs = 0.00;
                haberBs = 0.00;
                suma = 0.00;
                sumasBs = 0.00;
            }
            
            tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
            <td colspan='2'><b>TOTAL GASTOS</b></td>\n\
            <td style = 'text-align: right;'><b>" + total_gastos.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_gastosBs.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <tr>");

            total_objetos_ingresos = Object.keys(response['Ingresos']).length;

            for (i = 0; i < total_objetos_ingresos; i++) {
                total_filas_objeto_ingresos = Object.keys(response['Ingresos'][i]).length;

                for (j = 0; j < total_filas_objeto_ingresos; j++) {

                    if (response['Ingresos'][i][j].tipo_detalle == 1) {
                        debe = debe + parseFloat(response['Ingresos'][i][j].montoSus);
                        debeBs = debeBs + parseFloat(response['Ingresos'][i][j].montoBs);
                    }
                    else if (response['Ingresos'][i][j].tipo_detalle == 2) {
                        haber = haber + parseFloat(response['Ingresos'][i][j].montoSus);
                        haberBs = haberBs + parseFloat(response['Ingresos'][i][j].montoBs);
                    }
                }

                suma = haber - debe;
                sumaBs = haberBs - debeBs;
                total_ingresos = total_ingresos + suma;
                total_ingresosBs = total_ingresosBs + sumaBs;

                tabla.append("<tr>\n\
                <td><b>" + response['Ingresos'][i][0].codigo + "</b></td>\n\
                <td><b>" + response['Ingresos'][i][0].nombre + "<b></td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + suma.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + sumaBs.toFixed(2) + "</td>\n\
                <tr>");
                
                debe = 0.00;
                haber = 0.00;
                debeBs = 0.00;
                haberBs = 0.00;
                suma = 0.00;
                sumasBs = 0.00;
            }

            tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
            <td colspan='2'><b>TOTAL INGRESOS</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_ingresos.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_ingresosBs.toFixed(2) + "</b></td>\n\
            <tr>");
        }

        tabla.append("<tr style='background-color: #FC74A6'>\n\
        <td colspan='2'><b>TOTAL</b></td>\n\
        <td style = 'text-align: right;'><b>" + total_gastos.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;'><b>" + total_ingresos.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;'><b>" + total_gastosBs.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;'><b>" + total_ingresosBs.toFixed(2) + "</b></td>\n\
        <tr>");

        total = total_ingresos - total_gastos;
        totalBs = total_ingresosBs - total_gastosBs;
        
        tabla.append("<tr style='background-color: #8CDF33'>\n\
        <td colspan='2'><b>TOTAL UTILIDAD DEL PERIODO</b></td>\n\
        <td style = 'text-align: right;' colspan='2'><b>" + total.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;' colspan='2'><b>" + totalBs.toFixed(2) + "</b></td>\n\
        <tr>");

        $('#loading').css("display", "none");
    });
}

function balance_general(verificar) {

    var debe = 0.00;
    var debeBs = 0.00;
    var haber = 0.00;
    var haberBs = 0.00;

    var suma = 0.00;
    var sumaBs = 0.00;

    var total_activo = 0.00;
    var total_activoBs = 0.00;
    var total_pasivo = 0.00;
    var total_pasivoBs = 0.00;
    var total_patrimonio = 0.00;
    var total_patrimonioBs = 0.00;

    var total = 0.00;
    var totalBs = 0.00;

    if (verificar == 1) {
        var fecha1 = $('#fecha_in').val()+' 00:00:00';
        var fecha2 = $('#fecha_fi').val()+' 23:59:59';
    }
    else {
        var fecha1 = $('#fecha_inicial').val()+' 00:00:00';
        var fecha2 = $('#fecha_fin').val()+' 23:59:59';
    }

    var total_objetos_activo = 0;
    var total_objetos_pasivo = 0;
    var total_objetos_patrimonio = 0;
    var total_filas_objeto_activo = 0;
    var total_filas_objeto_pasivo = 0;
    var total_filas_objeto_patrimonio = 0;
    $('#tabla').empty();
    var tabla = $('#tabla');
    $('#loading').css("display", "block");
    $.get('reporte_balance_general/' + fecha1 + '/' + fecha2, function (response) {
      
        if(Object.keys(response).length > 0) {
            total_objetos_activo = Object.keys(response['Activo']).length;

            for (i = 0; i < total_objetos_activo; i++) {
                total_filas_objeto_activo = Object.keys(response['Activo'][i]).length;

                for (j = 0; j < total_filas_objeto_activo; j++) {

                    if (response['Activo'][i][j].tipo_detalle == 1) {
                        debe = debe + parseFloat(response['Activo'][i][j].montoSus);
                        debeBs = debeBs + parseFloat(response['Activo'][i][j].montoBs);
                    }
                    else if (response['Activo'][i][j].tipo_detalle == 2) {
                        haber = haber + parseFloat(response['Activo'][i][j].montoSus);
                        haberBs = haberBs + parseFloat(response['Activo'][i][j].montoBs);
                    }
                }

                suma = debe - haber;
                sumaBs = debeBs - haberBs;
                total_activo = total_activo + suma;
                total_activoBs = total_activoBs + sumaBs;

                tabla.append("<tr>\n\
                <td><b>" + response['Activo'][i][0].codigo + "</b></td>\n\
                <td><b>" + response['Activo'][i][0].nombre + "<b></td>\n\
                <td style = 'text-align: right;'>" + suma.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + sumaBs.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <tr>");
                
                debe = 0.00;
                haber = 0.00;
                debeBs = 0.00;
                haberBs = 0.00;
                suma = 0.00;
                sumasBs = 0.00;
            }
            
            tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
            <td colspan='2'><b>TOTAL ACTIVO</b></td>\n\
            <td style = 'text-align: right;'><b>" + total_activo.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_activoBs.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <tr>");

            total_objetos_pasivo = Object.keys(response['Pasivo']).length;

            for (i = 0; i < total_objetos_pasivo; i++) {
                total_filas_objeto_pasivo = Object.keys(response['Pasivo'][i]).length;

                for (j = 0; j < total_filas_objeto_pasivo; j++) {

                    if (response['Pasivo'][i][j].tipo_detalle == 1) {
                        debe = debe + parseFloat(response['Pasivo'][i][j].montoSus);
                        debeBs = debeBs + parseFloat(response['Pasivo'][i][j].montoBs);
                    }
                    else if (response['Pasivo'][i][j].tipo_detalle == 2) {
                        haber = haber + parseFloat(response['Pasivo'][i][j].montoSus);
                        haberBs = haberBs + parseFloat(response['Pasivo'][i][j].montoBs);
                    }
                }

                suma = haber - debe;
                sumaBs = haberBs - debeBs;
                total_pasivo = total_pasivo + suma;
                total_pasivoBs = total_pasivoBs + sumaBs;

                tabla.append("<tr>\n\
                <td><b>" + response['Pasivo'][i][0].codigo + "</b></td>\n\
                <td><b>" + response['Pasivo'][i][0].nombre + "<b></td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + suma.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + sumaBs.toFixed(2) + "</td>\n\
                <tr>");
                
                debe = 0.00;
                haber = 0.00;
                debeBs = 0.00;
                haberBs = 0.00;
                suma = 0.00;
                sumasBs = 0.00;
            }

            tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
            <td colspan='2'><b>TOTAL PASIVO</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_pasivo.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_pasivoBs.toFixed(2) + "</b></td>\n\
            <tr>");

            total_objetos_patrimonio = Object.keys(response['Patrimonio']).length;

            for (i = 0; i < total_objetos_patrimonio; i++) {
                total_filas_objeto_patrimonio = Object.keys(response['Patrimonio'][i]).length;

                for (j = 0; j < total_filas_objeto_patrimonio; j++) {

                    if (response['Patrimonio'][i][j].tipo_detalle == 1) {
                        debe = debe + parseFloat(response['Patrimonio'][i][j].montoSus);
                        debeBs = debeBs + parseFloat(response['Patrimonio'][i][j].montoBs);
                    }
                    else if (response['Patrimonio'][i][j].tipo_detalle == 2) {
                        haber = haber + parseFloat(response['Patrimonio'][i][j].montoSus);
                        haberBs = haberBs + parseFloat(response['Patrimonio'][i][j].montoBs);
                    }
                }

                suma = haber - debe;
                sumaBs = haberBs - debeBs;
                total_patrimonio = total_patrimonio + suma;
                total_patrimonioBs = total_patrimonioBs + sumaBs;

                tabla.append("<tr>\n\
                <td><b>" + response['Patrimonio'][i][0].codigo + "</b></td>\n\
                <td><b>" + response['Patrimonio'][i][0].nombre + "<b></td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + suma.toFixed(2) + "</td>\n\
                <td style = 'text-align: right;'></td>\n\
                <td style = 'text-align: right;'>" + sumaBs.toFixed(2) + "</td>\n\
                <tr>");
                
                debe = 0.00;
                haber = 0.00;
                debeBs = 0.00;
                haberBs = 0.00;
                suma = 0.00;
                sumasBs = 0.00;
            }

            tabla.append("<tr style='background-color: #3C8DBC; color: white;'>\n\
            <td colspan='2'><b>TOTAL PATRIMONIO</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_patrimonio.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b></b></td>\n\
            <td style = 'text-align: right;'><b>" + total_patrimonioBs.toFixed(2) + "</b></td>\n\
            <tr>");
        }

        total = total_pasivo + total_patrimonio;
        totalBs = total_pasivoBs + total_patrimonioBs;

        tabla.append("<tr style='background-color: #FC74A6'>\n\
        <td colspan='2'><b>TOTAL</b></td>\n\
        <td style = 'text-align: right;'><b>" + total_activo.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;'><b>" + total.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;'><b>" + total_activoBs.toFixed(2) + "</b></td>\n\
        <td style = 'text-align: right;'><b>" + totalBs.toFixed(2) + "</b></td>\n\
        <tr>");

        $('#loading').css("display", "none");
    });
}

function ExportarExcel(tabla,nombre) {

    var ExportButtons = document.getElementById(tabla);
    var instance = new TableExport(ExportButtons, {
        filename: nombre,
        formats: ['xlsx'],
        exportButtons: false
    });
    var exportData = instance.getExportData()[tabla]['xlsx'];
    instance.export2file(exportData.data, exportData.mimeType, exportData.filename, exportData.fileExtension);
    instance.remove();
}

function ExportarTxt(tabla,nombre) {

    var ExportButtons = document.getElementById(tabla);
    TableExport.prototype.formatConfig.txt.separator = "|";
    var instance = new TableExport(ExportButtons, {
        headers: false,
        filename: nombre,
        formats: ['txt'],
        exportButtons: false
    });
    
    var exportData = instance.getExportData()[tabla]['txt'];
    instance.export2file(exportData.data, exportData.mimeType, exportData.filename, exportData.fileExtension);
    instance.remove();
}
