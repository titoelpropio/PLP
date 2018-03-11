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
    $('#fecha_factura_LV').val(hoy);
    $('#fecha_factura_DUI_LC').val(hoy);
});

var Tamaño = 1;
var idcuenta = ["0"];
var onclick = [false];
var indice = 0;

var debebs = ["0.00"];
var haberbs = ["0.00"];
var debesus = ["0.00"];
var habersus = ["0.00"];

function tamañoInput(id) {
  
  var valueLength = $(id).val().length;
  
    // Para que no arroje error si el input se vacía
    if (valueLength > 0) {
      
      $(id).attr('size', valueLength*2);
    }
}

function verificar_repetido(id_cuenta){//este se encarga de ferificar que no pueda agregar 2 cuentas iguales
    var sw = false;
    if (Tamaño > 0) {
        for (var i = 0; i < Tamaño; i++)
        {
            if (idcuenta[i] == id_cuenta)
            {
               sw = true;
            }
        }
    }
    return sw;
}

function lista_cuentas() {
   $("#myModal").modal('show');
}

function lista_centro_costo(index) {
   $("#myModal_CC").modal('show');
   indice = index;
}

function agregar_datos(index)
{
   var id = $("#idcuenta_"+index).html();
   var codigo = $("#codigocuenta_"+index).html();
   var nombre = $("#nombrecuenta_"+index).html();
   if (!verificar_repetido(id))
   {
       var Fila = Tamaño - 1;
       onclick[Fila] = true;
       idcuenta[Fila] = id;
       $("#id_"+Fila).val(id);
       $("#codigo_"+Fila).val(codigo);
       $("#cuenta_"+Fila).val(nombre);
       tamañoInput("#cuenta_"+Fila);

       $("#codigo_"+Fila).attr('type','text');
       $("#cuenta_"+Fila).attr('type','text');
       $("#centro_costo_"+Fila).attr('type','text');
       $("#agregar_"+Fila).css('display','none');
       $("#quitar_"+Fila).css('display','inline');
       $('#myModal').modal('hide');

       var fila = '\n\
       <tr id="fila_'+Tamaño+'">\n\
            <td style="vertical-align: middle;">\n\
                <CENTER>\n\
                    <a href="#" name="agregar_'+Tamaño+'" id="agregar_'+Tamaño+'" data-status=0 class="btn btn-success" onclick="lista_cuentas()" title="Agregar cuenta">\n\
                        <i class="fa fa-plus" aria-hidden="true"></i>\n\
                    </a>\n\
                    <a href="#" name="quitar_'+Tamaño+'" id="quitar_'+Tamaño+'" data-status=0 class="btn btn-danger" onclick="quitar_fila('+Tamaño+')" style="display: none" title="Eliminar">\n\
                        <i class="fa fa-trash-o" aria-hidden="true"></i>\n\
                    </a>\n\
                </CENTER>\n\
            </td>\n\
            <td style="display: none">\n\
                <input type="hidden" name="id[]" id="id_'+Tamaño+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="codigo[]" id="codigo_'+Tamaño+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="cuenta[]" id="cuenta_'+Tamaño+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td style="display: none">\n\
                <input type="hidden" name="tipo[]" id="tipo_'+Tamaño+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td onclick="bloquear_desbloquear('+Tamaño+','+"'"+'debe_bs'+"'"+')">\n\
                <input type="hidden" name="debe_bs[]" id="debe_bs_'+Tamaño+'" class="form-control" style="border:none; text-align: right;" onchange="calcular('+Tamaño+','+"'"+'debe_bs'+"'"+')" value="0.00" readonly>\n\
            </td>\n\
            <td onclick="bloquear_desbloquear('+Tamaño+','+"'"+'haber_bs'+"'"+')">\n\
                <input type="hidden" name="haber_bs[]" id="haber_bs_'+Tamaño+'" class="form-control" style="border:none; text-align: right;" onchange="calcular('+Tamaño+','+"'"+'haber_bs'+"'"+')" value="0.00" readonly>\n\
            </td>\n\
            <td onclick="bloquear_desbloquear('+Tamaño+','+"'"+'debe_sus'+"'"+')">\n\
                <input type="hidden" name="debe_sus[]" id="debe_sus_'+Tamaño+'" class="form-control" style="border:none; text-align: right;" onchange="calcular('+Tamaño+','+"'"+'debe_sus'+"'"+')" value="0.00" readonly>\n\
            </td>\n\
            <td onclick="bloquear_desbloquear('+Tamaño+','+"'"+'haber_sus'+"'"+')">\n\
                <input type="hidden" name="haber_sus[]" id="haber_sus_'+Tamaño+'" class="form-control" style="border:none; text-align: right;" onchange="calcular('+Tamaño+','+"'"+'haber_sus'+"'"+')" value="0.00" readonly>\n\
            </td>\n\
            <td style="display: none">\n\
                <input type="hidden" name="id_centro_costo[]" id="id_centro_costo_'+Tamaño+'" class="form-control" style="border:none;" readonly>\n\
            </td>\n\
            <td>\n\
                <input type="hidden" name="centro_costo[]" id="centro_costo_'+Tamaño+'" class="form-control" onclick="lista_centro_costo('+Tamaño+')" style="border:none;" readonly>\n\
            </td>\n\
        </tr>';
        $('#tabla').append(fila);
        idcuenta[Tamaño] = "0";
        onclick[Tamaño] = false;
        debebs[Tamaño] = "0.00";
        haberbs[Tamaño] = "0.00";
        debesus[Tamaño] = "0.00";
        habersus[Tamaño] = "0.00";
        Tamaño++;

   }
   else
   {
      toastr.error("LA CUENTA YA ESTA EN USO");
   }
}

function agregar_centro_costo(index)
{
    $("#id_centro_costo_"+indice).val($("#idcentrocosto_"+index).html());
    $("#centro_costo_"+indice).val($("#nombrecentrocosto_"+index).html());
    $('#myModal_CC').modal('hide');
}

function quitar_fila(index)
{
    idcuenta[index] = "0";

    debebs[index] = "0.00";
    haberbs[index] = "0.00";
    debesus[index] = "0.00";
    habersus[index] = "0.00";

    $("#total_debe_bs").val(parseFloat(suma_debebs()).toFixed(2));
    $("#total_haber_bs").val(parseFloat(suma_haberbs()).toFixed(2));
    $("#total_debe_sus").val(parseFloat(suma_debesus()).toFixed(2));
    $("#total_haber_sus").val(parseFloat(suma_habersus()).toFixed(2));
    $('#fila_'+index).remove();
}

function bloquear_desbloquear(index,valor)
{
    if (onclick[index])
    {
        if (valor == "debe_bs" || valor == "debe_sus")
        {
           $("#debe_bs_"+index).prop('readonly', false);
           $("#debe_sus_"+index).prop('readonly', false);
           $("#haber_bs_"+index).prop('readonly', true);
           $("#haber_sus_"+index).prop('readonly', true);
           $("#debe_bs_"+index).attr('type','text');
           $("#debe_sus_"+index).attr('type','text');
           $("#haber_bs_"+index).attr('type','hidden');
           $("#haber_sus_"+index).attr('type','hidden');
           $("#tipo_"+index).val("1");
        }
        else if (valor == "haber_bs" || valor == "haber_sus")
        {
           $("#haber_bs_"+index).prop('readonly', false);
           $("#haber_sus_"+index).prop('readonly', false);
           $("#debe_bs_"+index).prop('readonly', true);
           $("#debe_sus_"+index).prop('readonly', true);
           $("#haber_bs_"+index).attr('type','text');
           $("#haber_sus_"+index).attr('type','text');
           $("#debe_bs_"+index).attr('type','hidden');
           $("#debe_sus_"+index).attr('type','hidden');
           $("#tipo_"+index).val("2");
        }
        calcular(index,valor);
    }
}

function calcular(index,valor)
{
    var cambio = $("#tipo_cambio").val();
    if (valor == "debe_bs")
    {
        debebs[index] = $("#debe_bs_"+index).val();
        debesus[index] = (parseFloat(debebs[index]) / parseFloat(cambio)).toFixed(2);
        $("#debe_sus_"+index).val(debesus[index]);

        haberbs[index] = "0.00";
        habersus[index] = "0.00";

        $("#total_debe_bs").val(suma_debebs().toFixed(2));
        $("#total_debe_sus").val(suma_debesus().toFixed(2));

        
        $("#total_haber_bs").val(suma_haberbs().toFixed(2));
        $("#total_haber_sus").val(suma_habersus().toFixed(2));
        
    }
    else if (valor == "debe_sus")
    {
        debesus[index] = $("#debe_sus_"+index).val();
        debebs[index] = (parseFloat(debesus[index]) * parseFloat(cambio)).toFixed(2);
        $("#debe_bs_"+index).val(debebs[index]);

        habersus[index] = "0.00";
        haberbs[index] = "0.00";

        $("#total_debe_bs").val(suma_debebs().toFixed(2));
        $("#total_debe_sus").val(suma_debesus().toFixed(2));
        
        $("#total_haber_bs").val(suma_haberbs().toFixed(2));
        $("#total_haber_sus").val(suma_habersus().toFixed(2));
    }
    else if (valor == "haber_bs")
    {
        haberbs[index] = $("#haber_bs_"+index).val();
        habersus[index] = (parseFloat(haberbs[index]) / parseFloat(cambio)).toFixed(2);
        $("#haber_sus_"+index).val(habersus[index]);

        debebs[index] = "0.00";
        debesus[index] = "0.00";

        $("#total_haber_bs").val(suma_haberbs().toFixed(2));
        $("#total_haber_sus").val(suma_habersus().toFixed(2));
        
        $("#total_debe_bs").val(suma_debebs().toFixed(2));
        $("#total_debe_sus").val(suma_debesus().toFixed(2));
    }
    else if (valor == "haber_sus")
    {
        habersus[index] = $("#haber_sus_"+index).val();
        haberbs[index] = (parseFloat(habersus[index]) * parseFloat(cambio)).toFixed(2);
        $("#haber_bs_"+index).val(haberbs[index]);

        debesus[index] = "0.00";
        debebs[index] = "0.00";

        $("#total_haber_bs").val(suma_haberbs().toFixed(2));
        $("#total_haber_sus").val(suma_habersus().toFixed(2));
        
        $("#total_debe_bs").val(suma_debebs().toFixed(2));
        $("#total_debe_sus").val(suma_debesus().toFixed(2));
    }
}

function suma_debebs()
{
   var suma = 0.00;
   for (var i = 0; i < Tamaño; i++) {
       suma = suma + parseFloat(debebs[i]);
   }
   return suma;
}

function suma_debesus()
{
    var suma = 0.00;
   for (var i = 0; i < Tamaño; i++) {
       suma = suma + parseFloat(debesus[i]);
   }
   return suma;
}

function suma_haberbs()
{
    var suma = 0.00;
   for (var i = 0; i < Tamaño; i++) {
       suma = suma + parseFloat(haberbs[i]);
   }
   return suma;
}

function suma_habersus()
{
    var suma = 0.00;
   for (var i = 0; i < Tamaño; i++) {
       suma = suma + parseFloat(habersus[i]);
   }
   return suma;
}

function validar()
{
    var sw = true;
    if ($("#codigo_0").val() == "") 
    {
        toastr.error("El comprobante esta vacío");
        sw = false; 
    }
    if ($("#total_debe_bs").val() == "0.00" && $("#total_haber_bs").val() == "0.00") 
    {
        toastr.error("No se ha agregado ningún monto en los campos Debe y Haber");
        sw = false;
    }
    if ($("#glosa").val() == "") 
    {
        toastr.error("El campo Detalle de Transacción no debe estar vacio");
        sw = false; 
    }
    if ($("#total_debe_bs").val() != $("#total_haber_bs").val()) 
    {
        toastr.error("El Total tiene que cuadrar");
        sw = false; 
    }
    
    return sw;
}

function agregar_libro_compra_venta()
{
    if ($("#tipo_comprobante").val() == 1)
    {
        $("#mostrar_LV").css('display','inline');
        $("#mostrar_LC").css('display','none');
    }
    else if ($("#tipo_comprobante").val() == 2)
    {
        $("#mostrar_LC").css('display','inline');
        $("#mostrar_LV").css('display','none');
    }
    else if ($("#tipo_comprobante").val() == 3)
    {
        $("#mostrar_LC").css('display','none');
        $("#mostrar_LV").css('display','none');
    }
}

function agregar_libro_venta(value)
{
    if (value == "1")
    {
        $("#btn_agregar_LV").attr('disabled',false);
    }
    else if (value == "0")
    {
        $("#btn_agregar_LV").attr('disabled',true);
    }
}

function agregar_libro_compra(value)
{
    if (value == "1")
    {
        $("#btn_agregar_LC").attr('disabled',false);
    }
    else if (value == "0")
    {
        $("#btn_agregar_LC").attr('disabled',true);
    }
}

function tipo_factura_venta()
{
    if ($("#tipo_factura_LV").val() == 1)
    {
        $("#codigo_control_LV").prop('readonly', true);
    }
    else if ($("#tipo_factura_LV").val() == 2)
    {
        $("#codigo_control_LV").prop('readonly', false);
    }
}

function tipo_factura_compra()
{
    if ($("#tipo_factura_LC").val() == 1)
    {
        $("#codigo_control_LC").prop('readonly', true);
    }
    else if ($("#tipo_factura_LC").val() == 2)
    {
        $("#codigo_control_LC").prop('readonly', false);
    }
}

