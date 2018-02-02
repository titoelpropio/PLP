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
    $('#fecha_transaccion').val(hoy);
});

var Fila = 0;
var Tamaño = 0;
var debe_bs_anterior = 0.00;
var debe_sus_anterior = 0.00;
var haber_bs_anterior = 0.00;
var haber_sus_anterior = 0.00;

function tamañoInput(id) {
  
  var valueLength = $(id).val().length;
  
    // Para que no arroje error si el input se vacía
    if (valueLength > 0) {
      
      $(id).attr('size', valueLength*2);
    }
}

function verificar_repetido(id_cuenta){//este se encarga de ferificar que no pueda agregar 2 cuentas iguales
    var id=0;
    var sw = false;
    $("#tabla tr").each(function () {
        id = $(this).find("input").val();
        if (id == id_cuenta)
        {
           sw = true;
        }
    });
    return sw;
}

function lista_cuentas(fila) {
   $("#myModal").modal('show');
   Fila = fila;
}

function agregar_datos(index)
{
   var id = $("#idcuenta_"+index).html();
   var codigo = $("#codigocuenta_"+index).html();
   var nombre = $("#nombrecuenta_"+index).html();
   var siguiente = Fila + 1;
   if (!verificar_repetido(id))
   {
       $("#id_"+Fila).val(id);
       $("#codigo_"+Fila).val(codigo);
       $("#cuenta_"+Fila).val(nombre);
       tamañoInput("#cuenta_"+Fila);
       $("#codigo_"+Fila).attr('type','text');
       $("#cuenta_"+Fila).attr('type','text');
       $("#agregar_"+Fila).css('display','none');
       $("#quitar_"+Fila).css('display','inline');
       $("#debe_bs_"+Fila).attr('type','text');
       $("#haber_bs_"+Fila).attr('type','text');
       $("#debe_sus_"+Fila).attr('type','text');
       $("#haber_sus_"+Fila).attr('type','text');
       $('#myModal').modal('hide');
       var fila = '\n\
       <tr id="fila_'+siguiente+'">\n\
            <td style="vertical-align: middle;">\n\
                <CENTER>\n\
                    <a href="#" name="agregar_'+siguiente+'" id="agregar_'+siguiente+'" data-status=0 class="btn btn-success" onclick="lista_cuentas('+siguiente+')">\n\
                        <i class="fa fa-plus" aria-hidden="true"></i>\n\
                    </a>\n\
                    <a href="#" name="quitar_'+siguiente+'" id="quitar_'+siguiente+'" data-status=0 class="btn btn-danger" onclick="quitar_fila('+siguiente+')" style="display: none">\n\
                        <i class="fa fa-trash-o" aria-hidden="true"></i>\n\
                    </a>\n\
                </CENTER>\n\
            </td>\n\
            <td style="display: none">\n\
                <input type="hidden" name="id[]" id="id_'+siguiente+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="codigo[]" id="codigo_'+siguiente+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="cuenta[]" id="cuenta_'+siguiente+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="debe_bs[]" id="debe_bs_'+siguiente+'" class="form-control" style="border:none; text-align: right;" onfocus="bloquear_desbloquear('+siguiente+','+"'"+'debe_bs'+"'"+')" onchange="calcular('+siguiente+','+"'"+'debe_bs'+"'"+')">\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="haber_bs[]" id="haber_bs_'+siguiente+'" class="form-control" style="border:none; text-align: right;" onfocus="bloquear_desbloquear('+siguiente+','+"'"+'haber_bs'+"'"+')" onchange="calcular('+siguiente+','+"'"+'haber_bs'+"'"+')">\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="debe_sus[]" id="debe_sus_'+siguiente+'" class="form-control" style="border:none; text-align: right;" onfocus="bloquear_desbloquear('+siguiente+','+"'"+'debe_sus'+"'"+')" onchange="calcular('+siguiente+','+"'"+'debe_sus'+"'"+')">\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="haber_sus[]" id="haber_sus_'+siguiente+'" class="form-control" style="border:none; text-align: right;" onfocus="bloquear_desbloquear('+siguiente+','+"'"+'haber_sus'+"'"+')" onchange="calcular('+siguiente+','+"'"+'haber_sus'+"'"+')">\n\
            </td>\n\
        </tr>';
        $('#tabla').append(fila);
        Tamaño++;
   }
   else
   {
      toastr.error("LA CUENTA YA ESTA EN USO");
   }
}

function quitar_fila(index)
{
    if ($("#debe_bs_"+index).val()!="" && $("#debe_sus_"+index).val()!="")
    {
        var totaldebebs = parseFloat($("#total_debe_bs").val()) - parseFloat($("#debe_bs_"+index).val());
        var totaldebesus = parseFloat($("#total_debe_sus").val()) - parseFloat($("#debe_sus_"+index).val());
        $("#total_debe_bs").val(totaldebebs.toFixed(2));
        $("#total_debe_sus").val(totaldebesus.toFixed(2));
    }
    else if ($("#haber_bs_"+index).val()!="" && $("#haber_sus_"+index).val()!="")
    {
        var totalhaberbs = parseFloat($("#total_haber_bs").val()) - parseFloat($("#haber_bs_"+index).val());
        var totalhabersus = parseFloat($("#total_haber_sus").val()) - parseFloat($("#haber_sus_"+index).val());
        $("#total_haber_bs").val(totalhaberbs.toFixed(2));
        $("#total_haber_sus").val(totalhabersus.toFixed(2));
    }
    $('#fila_'+index).remove();
    Tamaño--;
}

function bloquear_desbloquear(index,valor)
{
    if (valor == "debe_bs" || valor == "debe_sus")
    {
       if ($("#debe_bs_"+index).val()!="" && $("#debe_sus_"+index).val()!="")
       {
            debe_bs_anterior = parseFloat($("#debe_bs_"+index).val());
            debe_sus_anterior = parseFloat($("#debe_sus_"+index).val());
       }
       if ($("#haber_bs_"+index).val()!="" && $("#haber_sus_"+index).val()!="")
       {
            haber_bs_anterior = parseFloat($("#haber_bs_"+index).val());
            haber_sus_anterior = parseFloat($("#haber_sus_"+index).val());
       }
       $("#debe_bs_"+index).val("0.00");
       $("#debe_sus_"+index).val("0.00");
       $("#debe_bs_"+index).removeAttr("readonly");
       $("#debe_sus_"+index).removeAttr("readonly");
       $("#haber_bs_"+index).val("");
       $("#haber_sus_"+index).val("");
       $("#haber_bs_"+index).attr("readonly","readonly");
       $("#haber_sus_"+index).attr("readonly","readonly");
    }
    else if (valor == "haber_bs" || valor == "haber_sus")
    {
       if ($("#debe_bs_"+index).val()!="" && $("#debe_sus_"+index).val()!="")
       {
            debe_bs_anterior = parseFloat($("#debe_bs_"+index).val());
            debe_sus_anterior = parseFloat($("#debe_sus_"+index).val());
       }
       if ($("#haber_bs_"+index).val()!="" && $("#haber_sus_"+index).val()!="")
       {
            haber_bs_anterior = parseFloat($("#haber_bs_"+index).val());
            haber_sus_anterior = parseFloat($("#haber_sus_"+index).val());
       }
       $("#haber_bs_"+index).val("0.00");
       $("#haber_sus_"+index).val("0.00");
       $("#haber_bs_"+index).removeAttr("readonly");
       $("#haber_sus_"+index).removeAttr("readonly");
       $("#debe_bs_"+index).val("");
       $("#debe_sus_"+index).val("");
       $("#debe_bs_"+index).attr("readonly","readonly");
       $("#debe_sus_"+index).attr("readonly","readonly");
    }
}

function calcular(index,valor)
{
    var cambio = parseFloat($("#tipo_cambio").val());
    if (valor == "debe_bs")
    {
        var debe_sus = parseFloat($("#debe_bs_"+index).val()) / cambio;
        var total_debe_bs = parseFloat($("#total_debe_bs").val());
        var total_debe_sus = parseFloat($("#total_debe_sus").val());
        var total_haber_bs = parseFloat($("#total_haber_bs").val());
        var total_haber_sus = parseFloat($("#total_haber_sus").val());
        $("#debe_sus_"+index).val(debe_sus.toFixed(2));
        total_debe_bs = total_debe_bs + parseFloat($("#debe_bs_"+index).val()) - debe_bs_anterior;
        total_debe_sus = total_debe_sus + parseFloat($("#debe_sus_"+index).val()) - debe_sus_anterior;
        $("#total_debe_bs").val(total_debe_bs.toFixed(2));
        $("#total_debe_sus").val(total_debe_sus.toFixed(2));
        total_haber_bs = total_haber_bs - haber_bs_anterior;
        total_haber_sus = total_haber_sus - haber_sus_anterior;
        $("#total_haber_bs").val(total_haber_bs.toFixed(2));
        $("#total_haber_sus").val(total_haber_sus.toFixed(2));
        debe_bs_anterior = 0.00;
        debe_sus_anterior = 0.00;
        haber_bs_anterior = 0.00;
        haber_sus_anterior = 0.00;
    }
    else if (valor == "debe_sus")
    {
        var debe_bs = parseFloat($("#debe_sus_"+index).val()) * cambio;
        var total_debe_bs = parseFloat($("#total_debe_bs").val());
        var total_debe_sus = parseFloat($("#total_debe_sus").val());
        var total_haber_bs = parseFloat($("#total_haber_bs").val());
        var total_haber_sus = parseFloat($("#total_haber_sus").val());
        $("#debe_bs_"+index).val(debe_bs.toFixed(2));
        total_debe_bs = total_debe_bs + parseFloat($("#debe_bs_"+index).val()) - debe_bs_anterior;
        total_debe_sus = total_debe_sus + parseFloat($("#debe_sus_"+index).val()) - debe_sus_anterior;
        $("#total_debe_bs").val(total_debe_bs.toFixed(2));
        $("#total_debe_sus").val(total_debe_sus.toFixed(2));
        total_haber_bs = total_haber_bs - haber_bs_anterior;
        total_haber_sus = total_haber_sus - haber_sus_anterior;
        $("#total_haber_bs").val(total_haber_bs.toFixed(2));
        $("#total_haber_sus").val(total_haber_sus.toFixed(2));
        debe_bs_anterior = 0.00;
        debe_sus_anterior = 0.00;
        haber_bs_anterior = 0.00;
        haber_sus_anterior = 0.00;
    }
    else if (valor == "haber_bs")
    {
        var haber_sus = parseFloat($("#haber_bs_"+index).val()) / cambio;
        var total_debe_bs = parseFloat($("#total_debe_bs").val());
        var total_debe_sus = parseFloat($("#total_debe_sus").val());
        var total_haber_bs = parseFloat($("#total_haber_bs").val());
        var total_haber_sus = parseFloat($("#total_haber_sus").val());
        $("#haber_sus_"+index).val(haber_sus.toFixed(2));
        total_debe_bs = total_debe_bs - debe_bs_anterior;
        total_debe_sus = total_debe_sus - debe_sus_anterior;
        $("#total_debe_bs").val(total_debe_bs.toFixed(2));
        $("#total_debe_sus").val(total_debe_sus.toFixed(2));
        total_haber_bs = total_haber_bs + parseFloat($("#haber_bs_"+index).val()) - haber_bs_anterior;
        total_haber_sus = total_haber_sus + parseFloat($("#haber_sus_"+index).val()) - haber_sus_anterior;
        $("#total_haber_bs").val(total_haber_bs.toFixed(2));
        $("#total_haber_sus").val(total_haber_sus.toFixed(2));
        debe_bs_anterior = 0.00;
        debe_sus_anterior = 0.00;
        haber_bs_anterior = 0.00;
        haber_sus_anterior = 0.00;
    }
    else if (valor == "haber_sus")
    {
        var haber_bs = parseFloat($("#haber_sus_"+index).val()) * cambio;
        var total_debe_bs = parseFloat($("#total_debe_bs").val());
        var total_debe_sus = parseFloat($("#total_debe_sus").val());
        var total_haber_bs = parseFloat($("#total_haber_bs").val());
        var total_haber_sus = parseFloat($("#total_haber_sus").val());
        $("#haber_bs_"+index).val(haber_bs.toFixed(2));
        total_debe_bs = total_debe_bs - debe_bs_anterior;
        total_debe_sus = total_debe_sus - debe_sus_anterior;
        $("#total_debe_bs").val(total_debe_bs.toFixed(2));
        $("#total_debe_sus").val(total_debe_sus.toFixed(2));
        total_haber_bs = total_haber_bs + parseFloat($("#haber_bs_"+index).val()) - haber_bs_anterior;
        total_haber_sus = total_haber_sus + parseFloat($("#haber_sus_"+index).val()) - haber_sus_anterior;
        $("#total_haber_bs").val(total_haber_bs.toFixed(2));
        $("#total_haber_sus").val(total_haber_sus.toFixed(2));
        debe_bs_anterior = 0.00;
        debe_sus_anterior = 0.00;
        haber_bs_anterior = 0.00;
        haber_sus_anterior = 0.00;
    }
}

function validar()
{
    var sw = true;
    if ($("#total_debe_bs").val() != $("#total_haber_bs").val()) 
    {
        toastr.error("El Total tiene que cuadrar");
        sw = false; 
    }
    if ($("#glosa").val() == "") 
    {
        toastr.error("El campo Detalle de Transacción no debe estar vacio");
        sw = false; 
    }
    if (Tamaño == 0) 
    {
        toastr.error("El comprobante esta vacío");
        sw = false; 
    }
    if (Tamaño > 0 && $("#total_debe_bs").val() == "0.00" || $("#total_haber_bs").val() == "0.00") 
    {
        toastr.error("Falta llenar algunos datos");
        sw = false;
    }
    return sw;
}

function agregar() {

   var tito=$('#idcuenta').val();
    if(verificarrepetido(tito)){
         idcuenta[cont] = $('#idcuenta').val();
    cuenta = $('#idcuenta option:selected').text();
    
    debe = parseInt($('#iddebe').val());

    haber = parseInt($('#idhaber').val());
    if (isNaN(debe)) {
        debe = 0;
    }
    if (isNaN(haber)) {
        haber = 0;
    }
    tipocambio = $('#tipocambio').val();
    if (debe != "" || haber != "")
    {
        subtotaldebe[cont] = debe;
        subtotalhaber[cont] = haber;
        subtotaldebed[cont] = debe / tipocambio;
        subtotalhaberd[cont] = haber / tipocambio;
        totaldebe = totaldebe + subtotaldebe[cont];
        totalhaber = totalhaber + subtotalhaber[cont];
        totaldebed = totaldebed + subtotaldebed[cont];
        totalhaberd = totalhaberd + subtotalhaberd[cont];

        var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-danger" onclick="eliminar(' + cont + ')">X</button>\n\
<button type="button" class="btn btn-primary" onclick="modificar(' + cont + ')">MODIFICAR</button></td>\n\
<td><input type="text" name="id_cuenta[]" value="'  +idcuenta[cont] + '"/></td>\n\
<td><label>' + cuenta + '</label></td>\n\
<td><input name="debe[]" type="number"   value="' + subtotaldebe[cont] + '" id="debe' + cont + '" onclick="bloquear(this)"></input></td>\n\
<td><input name="haber[]" type="number"  value="' + subtotalhaber[cont] + '" id="haber' + cont + '" onclick="bloquear(this)"></input></td>\n\
<td><input type="number" value="' + subtotaldebed[cont].toFixed(2) + '" id="debed' + cont + '" onclick="bloquear(this)"></input></td>\n\
<td><input type="number" value="' + subtotalhaberd[cont].toFixed(2) + '" id="haberd' + cont + '" onclick="bloquear(this)"></input></td></tr>';

        $("#totaldebe").text("B/. " + totaldebe);
        $("#totalhaber").text("B/. " + totalhaber);
        $("#totaldebed").text("$/. " + totaldebed.toFixed(2));
        $("#totalhaberd").text("$/. " + totalhaberd.toFixed(2));

        $('#detalles').append(fila);
    } else {
        alert("error al ingresar el detalle");

    }
    $('#iddebe').val("");
    $('#idhaber').val("");
    cont++;
    evaluar();}

}
function eliminar(index) {
    idcuenta[index]=0;
    totaldebe = totaldebe - subtotaldebe[index];
    totalhaber = totalhaber - subtotalhaber[index];
    totaldebed = totaldebed - subtotaldebed[index];
    totalhaberd = totalhaberd - subtotalhaberd[index];

    subtotaldebe[index] = 0;
    subtotalhaber[index] = 0;

    $('#totaldebe').html("" + totaldebe);
    $('#totalhaber').html("" + totalhaber);
    $('#totaldebed').html("" + totaldebed.toFixed(2));
    $('#totalhaberd').html("" + totalhaberd.toFixed(2));
    $('#fila' + index).remove();
    evaluar();

}
function evaluar() {//sirve para activar o desactivar el guardar si en caso los totales del debe o haber estan en "0"
    if (totaldebe > 0 || totalhaber > 0) {
        $('#guardar').show();
    } else {
        $('#guardar').hide();
    }
}
function desabilitar(id, input) {
    $(input).val("");
    $('#' + id).val("0");

}
function guardar() {
//    if (totaldebe == totalhaber) {
//        var token = $("input[name=_token]").val();
//        var glosa = $("#glosa").val();
//        var estado = $("#estado").val();
//        var categoria = $("#idcategoria").val();
//        var id_tipo_cambio = $("#idtipocambio").val();
//        var tipo_cambio = $("#tipocambio").val();
//        var fecha = $("#fecha").val();
//        var id_gestion = $('#id_gestion').val();
//        var id_empleado=$('#id_empleado').val();
//      
//        $.ajax({
//            url: '/asiento/',
//            headers: {'X-CSRF-TOKEN': token},
//            dataType: 'json',
//            type: 'POST',
//            data: {glosa: glosa, estado: 1, id_categoria: categoria, id_gestion: id_gestion, id_moneda: id_tipo_cambio, cambio_tipo: tipo_cambio, fecha: fecha,id_usuario:id_empleado},
//            success: function (data) {
//                var id = data.id;
//                for (var i = 0; i < cont; i++) {
//                    if (subtotaldebe[i] != 0 || subtotalhaber[i] != 0 || subtotaldebe[i] != "" || subtotalhaber[i] != "") {
//                        $.ajax({
//                            url: '/detalle',
//                            headers: {'X-CSRF-TOKEN': token},
//                            dataType: 'json',
//                            type: 'POST',
//                            data: {id_cuenta: idcuenta[i], id_asiento: id, debe: subtotaldebe[i], haber: subtotalhaber[i]},
//                            success: function (data, textStatus, jqXHR) {
//
//
//                            }
//                        });
//                    }
//                }
//
//                for (j = cont - 1; j >= 0; j--) {
//                    eliminar(j);
//                }
//                cont = 0;
//                alert("se registro correctamete");
//            }
//        });

//    } else {
//        alert("por favor cuadre su asiento")
//    }
}

function modificar(index) {
    var xdebe = subtotaldebe[index];
    var yhaber = subtotalhaber[index];
    subtotaldebe[index] = $('#debe' + index).val();
    
    subtotaldebed[index] = $('#debed' + index).val(subtotaldebe[index] * tipocambio);

    subtotalhaber[index] = $('#haber' + index).val();
    subtotalhaberd[index] = $('#haberd' + index).val(subtotalhaber[index] * tipocambio);


    if (xdebe > ($('#debe' + index).val())) {
        totaldebe = totaldebe - (xdebe - ($('#debe' + index).val()));
        totaldebed = totaldebe * tipocambio;
        $("#totaldebe").text("B/. " + totaldebe);
        $("#totaldebed").text("$/. " + totaldebed);

//       subtotaldebe[index]=subtotaldebe[index]-xdebe;
    } else
    if (xdebe < ($('#debe' + index).val())) {
        totaldebe = totaldebe + (($('#debe' + index).val()) - xdebe);
        totaldebed = totaldebe * tipocambio;
        $("#totaldebe").text("B/. " + totaldebe);
        $("#totaldebed").text("$/. " + totaldebed);
    }

    if (yhaber > ($('#haber' + index).val())) {
        totalhaber = totalhaber - (yhaber - ($('#haber' + index).val()));
        totalhaberd = totalhaber * tipocambio;
        $("#totalhaber").text("B/. " + totalhaber);
        $("#totalhaberd").text("$/. " + totalhaberd);

//       subtotalhaber[index]=subtotalhaber[index]-xhaber;
    } else
    if (yhaber < ($('#haber' + index).val())) {
        totalhaber = totalhaber + (($('#haber' + index).val()) - yhaber);
        totalhaberd = totalhaber * tipocambio;
        $("#totalhaber").text("B/. " + totalhaber);
        $("#totalhaberd").text("$/. " + totalhaberd);
    }
}
// $(document).keydown(function(tecla){ 
//            if (tecla.keyCode == 65) { 
//               alert("estoy aqui");
//                
//            }else if(tecla.keyCode == 83) { 
//                $('.s').css({ 'background-color' : 'blue' }); 
//            }else if(tecla.keyCode == 68){ 
//                $('.d').css({ 'background-color' : 'green' }); 
//            } 
//        });
function bloquear(text) {
    if (($(text).val() == 0)) {
        $(text).attr('disabled', 'disabled');
    }

}



