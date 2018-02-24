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

function lista_asiento_anulado(verificar) {
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
    var tipo = "";
    var gestion = "";
    $('#loading').css("display", "block");
    $.get('lista_asiento_anulado/' + fecha1 + '/' + fecha2, function (response) {

        if(Object.keys(response).length > 0) {
            total_filas = Object.keys(response).length;

            for (var i = 0; i < total_filas; i++) {
                if (response[i].tipo == 1) {
                    tipo = "<span style='color: #008D4C;'>INGRESO</span>";
                }
                else if (response[i].tipo == 2) {
                    tipo = "<span style='color: #D73925;'>EGRESO</span>";
                }
                else if (response[i].tipo == 3) {
                    tipo = "<span style='color: #3C8DBC;'>TRASPASO</span>";
                }

                if (response[i].id_gestion == $('#id_gestion').val()) {
                    gestion = "<span style='color: #008D4C;'>" + response[i].gestion + "</span>";
                }
                else if (response[i].id_gestion != $('#id_gestion').val()) {
                    gestion = "<span style='color: #D73925;'>" + response[i].gestion + "</span>";
                }

                tabla.append("<tr>\n\
                <td style='vertical-align: middle;'><center>" + response[i].fecha_transaccion + "</center></td>\n\
                <td style='vertical-align: middle;'><center>" + response[i].nro_asiento + "</center></td>\n\
                <td style='vertical-align: middle;'><center><b>" + tipo + "</b></center></td>\n\
                <td style='vertical-align: middle;'>" + response[i].glosa + "</td>\n\
                <td style='vertical-align: middle;'><center>" + response[i].categoria + "</center></td>\n\
                <td style='vertical-align: middle;'><center><b>" + gestion + "</b></center></td>\n\
                <td>\n\
                <center>\n\
                    <buton class='btn btn-success' onclick='detalle_asiento_anulado(" + response[i].id + ")' title='Ver detalle del comprobante anulado'>\n\
                        <i class='fa fa-plus' aria-hidden='true'></i>\n\
                    </buton>\n\
                </center>\n\
                </td>\n\
                <tr>");
            }
        }

        $('#loading').css("display", "none");
    });
}

function detalle_asiento_anulado(id) {

    var total_debeBs = 0.00;
    var total_haberBs = 0.00;
    var total_debeSus = 0.00;
    var total_haberSus = 0.00;
    var centro_costo = "";
    $('#tabla_detalle').empty();
    var tabla_detalle = $('#tabla_detalle');
    $('#loading').css("display", "block");
    $.get('detalle_asiento_anulado/' + id, function (response) {
        if(Object.keys(response).length > 0) {
            total_filas = Object.keys(response).length;

            $('#fecha_anulado').text(response[0].fecha_anulado);
            $('#motivo_anulado').val(response[0].motivo_anulado);
            
            for (var i = 0; i < total_filas; i++) {

                if (response[i].centro_costo != null) {
                    centro_costo = response[i].centro_costo;
                }
                if (response[i].tipo == 1) {
                    tabla_detalle.append("<tr>\n\
                    <td>" + response[i].codigo + "</td>\n\
                    <td>" + response[i].cuenta + "</td>\n\
                    <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                    <td></td>\n\
                    <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                    <td></td>\n\
                    <td><center>" + centro_costo + "</center></td>\n\
                    <tr>");
                    total_debeBs = total_debeBs + parseFloat(response[i].montoBs);
                    total_debeSus = total_debeSus + parseFloat(response[i].montoSus);
                }
                else if (response[i].tipo == 2) {
                    tabla_detalle.append("<tr>\n\
                    <td>" + response[i].codigo + "</td>\n\
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" + response[i].cuenta + "</td>\n\
                    <td></td>\n\
                    <td style = 'text-align: right;'>" + response[i].montoBs + "</td>\n\
                    <td></td>\n\
                    <td style = 'text-align: right;'>" + response[i].montoSus + "</td>\n\
                    <td><center>" + centro_costo + "</center></td>\n\
                    <tr>");
                    total_haberBs = total_haberBs + parseFloat(response[i].montoBs);
                    total_haberSus = total_haberSus + parseFloat(response[i].montoSus);
                }
                centro_costo = "";
            }

            tabla_detalle.append("<tr style='background-color: #BED9E9'>\n\
            <td colspan='2'><b>TOTAL</b></td>\n\
            <td style = 'text-align: right;'><b>" + total_debeBs.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b>" + total_haberBs.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b>" + total_debeSus.toFixed(2) + "</b></td>\n\
            <td style = 'text-align: right;'><b>" + total_haberSus.toFixed(2) + "</b></td>\n\
            <td></td>\n\
            <tr>");
        }
        $('#loading').css("display", "none");
    });
    $("#myModal_detalle").modal('show');
}