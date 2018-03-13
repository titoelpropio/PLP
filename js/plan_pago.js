$(document).ready(function(){    
    $('#loading').css('display','none');         
});

function Validar_Plan_Pago(){          
  switch($('select[name=tipoPago]').val()) {
  case 'e':
    if ($('input[name=montoSus]').val() == "") { toastr.error('El campo Monto no debe estar vacio'); $('#loading').css('display','none'); $("#btn_registrar").show(); return false; }
    else{ toastr.success('GUARDADO CORRECTAMENTE'); return true; }    
    break;
  case 'b':     
    if ($('input[name=montoBancoSus]').val() == "" || $('select[name=banco]').val() == 0 || $('select[name=cuenta]').val() == 0 || $('input[name=nroDocumento]').val() == "") {
      if ($('input[name=montoBancoSus]').val()=="") { toastr.error('El campo Monto Banco no debe estar vacio'); }                           
      if ($('input[name=nroDocumento]').val()=="") { toastr.error('El campo Nro de Documento no debe estar vacio'); }  
      if ($('select[name=banco]').val()==0) { toastr.error('No Selecciono un Banco'); }                      
      if ($('select[name=cuenta]').val()==0) { toastr.error('No Selecciono una Cuenta'); }                                        
      $('#loading').css('display','none'); 
      $("#btn_registrar").show();        
      return false; 
    }else{ toastr.success('GUARDADO CORRECTAMENTE'); return true; }
    break;
  case 'be':   
    if ($('input[name=montoSus]').val() == "" || $('input[name=montoBancoSus]').val() == "" || $('select[name=banco]').val() == 0 || $('select[name=cuenta]').val() == 0 || $('input[name=nroDocumento]').val() == "") {
      if ($('input[name=montoBancoSus]').val()=="") { toastr.error('El campo Monto Banco no debe estar vacio'); }
      if ($('input[name=montoSus]').val()=="") { toastr.error('El campo Monto Efectivo no debe estar vacio'); }
      if ($('input[name=nroDocumento]').val()=="") { toastr.error('El campo Nro de Documento no debe estar vacio'); }  
      if ($('select[name=banco]').val()==0) { toastr.error('No Selecciono un Banco'); }                      
      if ($('select[name=cuenta]').val()==0) { toastr.error('No Selecciono una Cuenta'); }                                        
      $('#loading').css('display','none'); 
      $("#btn_registrar").show();          
      return false; 
    }else{ toastr.success('GUARDADO CORRECTAMENTE'); return true; }
    break;                      
  }
}


$("#tipoPago").change(function(event){    
    $('#loading').css('display','block');
    switch($("#tipoPago").val()) {
        case 'e':        
            $('select[name=banco]').empty();
            $('select[name=cuenta]').empty();
            $('input[name=nroDocumento]').val("");        
            $('input[name=montoBs]').val("0.00");
            $('input[name=montoSus]').val("0.00");       
            $('input[name=montoBancoBs]').val("0.00");
            $('input[name=montoBancoSus]').val("0.00");
            $('#div_montoEfectivoBs').css('display','block');
            $('#div_montoEfectivoSus').css('display','block');
            $('#div_pago_banco').css('display','none');
            $('#div_banco').css('display','none');
            $('#div_cuenta').css('display','none');
            $('#div_nroDoc').css('display','none');
            $('#div_montoBancoBs').css('display','none');
            $('#div_montoBancoSus').css('display','none');
            $('#div_fecha').css('display','none');
            $('#loading').css('display','none');
            break;
        case 'b':
            $('select[name=banco]').empty();
            $('select[name=cuenta]').empty();
            $('input[name=nroDocumento]').val("");        
            $('input[name=montoBs]').val("0.00");
            $('input[name=montoSus]').val("0.00");     
            $('input[name=montoBancoBs]').val("0.00");
            $('input[name=montoBancoSus]').val("0.00");
            $('#div_montoEfectivoBs').css('display','none');
            $('#div_montoEfectivoSus').css('display','none');
            $('#div_pago_banco').css('display','block');
            $('#div_banco').css('display','block');
            $('#div_cuenta').css('display','block');
            $('#div_nroDoc').css('display','block');
            $('#div_fecha').css('display','block');
            $('#div_montoBancoBs').css('display','block');
            $('#div_montoBancoSus').css('display','block');
            $.get('../cargarBanco',function(res){
               $('#banco').append('<option value=0> Seleccione un Banco') ;
                for (var i = 0; i < res.length; i++) {
                   $('#banco').append('<option value='+res[i].id+'>'+res[i].nombre) ;
                }
            $('#loading').css('display','none');      
            });        
            break;
        case 'be':
            $('select[name=banco]').empty();
            $('select[name=cuenta]').empty();
            $('input[name=nroDocumento]').val("");        
            $('input[name=montoBs]').val("0.00");
            $('input[name=montoSus]').val("0.00");
            $('input[name=montoBancoBs]').val("0.00");
            $('input[name=montoBancoSus]').val("0.00");
            $('#div_montoEfectivoBs').css('display','block');
            $('#div_montoEfectivoSus').css('display','block');
            $('#div_pago_banco').css('display','block');
            $('#div_banco').css('display','block');
            $('#div_cuenta').css('display','block');
            $('#div_nroDoc').css('display','block');
            $('#div_fecha').css('display','block');
            $('#div_montoBancoBs').css('display','block');
            $('#div_montoBancoSus').css('display','block');
            $.get('../cargarBanco',function(res){
               $('#banco').append('<option value=0> Seleccione un Banco') ;
                for (var i = 0; i < res.length; i++) {
                   $('#banco').append('<option value='+res[i].id+'>'+res[i].nombre) ;
                }
            $('#loading').css('display','none');      
            });   
            break;
    }        
});   

function cargarCuenta(select){
  $('#loading').css('display','block');      
  idBanco=$(select).val();
    $('#cuenta').empty();
    $.get('../cargarCuenta/'+idBanco,function(res){
        $('select[name=cuenta]').append('<option value=0> Seleccione una Cuenta') ;
        for (var i = 0; i < res.length; i++) {
           $('#cuenta').append('<option value='+res[i].id+'>'+res[i].nroCuenta+' - '+res[i].moneda);
        }
    $('#loading').css('display','none');      
    });
}

///MONEDAS
function CalcularMoneda(){
  $("input[name=dolar]").val((parseFloat($("input[name=boliviano]").val()) / parseFloat($("#compra").text())).toFixed(2));
}


function CambioMoneda(){//genera el codigo de la cuenta para ponerlo en en imput codigo del modal
  var moneda = $("input[name=moneda]").val(); 
  var usuario = $("input[name=usuario]").val();
  var password = $("input[name=password]").val();    
  if(moneda == ""){
    toastr.error("INTRODUSCA LOS DATOS CORRECTAMENTE");            
  }else{

    $('#loading').css('display','block');           
   
    $.ajax({
       url:'../AutorizarCambioMoneda',
        type: 'GET',
        dataType: 'json',
        data: {usuario:usuario, password: password, moneda:moneda},
        success: function(message){
          if (message.mensaje == 1) {
            $("#compra").text(moneda);
            $("input[name=dolar]").val(""); 
            $("input[name=boliviano]").val(""); 
            $("input[name=compra_aux]").val(moneda); 
            $('#ModalMoneda').modal('hide');
            toastr.success("TIENE PERMISO");                        
            $('#loading').css('display','none');         
          } else {
            toastr.error("NO TIENE PERMISO");                        
            $('#loading').css('display','none');         
          }
            //toastr.success(message.mensaje);  //asi se optiene cuando se envia algo en ajax           
        },error: function(){
            toastr.error("ERROR");            
            $('#loading').css('display','none');         
        },
    });
  }
}


function convertirMoneda(input)
{
  if ($(input).val()=="BOLIVIANOS")
  {
    $('#montoBs').attr("readonly",false);
    $('#montoSus').attr("readonly",true);
    $('#montoBancoBs').attr("readonly",false);
    $('#montoBancoSus').attr("readonly",true);
    $('#pagoBs').attr("readonly",false);
    $('#pagoSus').attr("readonly",true);
  }
  else
  {
    $('#montoBs').attr("readonly",true);
    $('#montoSus').attr("readonly",false);
    $('#montoBancoBs').attr("readonly",true);
    $('#montoBancoSus').attr("readonly",false);
    $('#pagoBs').attr("readonly",true);
    $('#pagoSus').attr("readonly",false);
  }
}

function pagoBolivanoDolar(input,tipo)
{//si tipo =0 entonces boliviano, si es =1 dolar
  monedaVenta = $("#venta").text();
  montoBs = $('#montoBs').val();
  montoSus = $('#montoSus').val();
  montoBancoBs = $('#montoBancoBs').val();
  montoBancoSus = $('#montoBancoSus').val();
  pagoBs = $('#pagoBs').val();
  pagoSus = $('#pagoSus').val();
  totalpagoBs = 0.00;
  totalpagosus = 0.00;
  cambioBs = 0.00;
  cambioSus = 0.00;
  if ($('#tipoPago').val() == "e")
  {
    if (tipo==0)
    {
      montoSus = (montoBs / monedaVenta).toFixed(2);
      pagoSus = (pagoBs / monedaVenta).toFixed(2);
      $('#montoSus').val(montoSus);
      $('#pagoSus').val(pagoSus);
      
    }
    else
    {
      montoBs = (montoSus * monedaVenta).toFixed(2);
      pagoBs = (pagoSus * monedaVenta).toFixed(2);
      $('#montoBs').val(montoBs);
      $('#pagoBs').val(pagoBs);
    }
    totalpagoBs = montoBs;
    totalpagoSus = montoSus;
    cambioBs = (pagoBs - totalpagoBs).toFixed(2);
    cambioSus = (pagoSus - totalpagoSus).toFixed(2);
    $('#totalpagoBs').text(totalpagoBs);
    $('#totalpagoSus').text(totalpagoSus);
    $('#cambioBs').text(cambioBs);
    $('#cambioSus').text(cambioSus);

    $('#txtTotalpagoBs').val(totalpagoBs);
    $('#txtTotalpagoSus').val(totalpagoSus);
    $('#txtCambioBs').val(cambioBs);
    $('#txtCambioSus').val(cambioSus);
  }
  else if ($('#tipoPago').val() == "b")
  {
    if (tipo==0)
    {
      montoBancoSus = (montoBancoBs / monedaVenta).toFixed(2);
      $('#montoBancoSus').val(montoBancoSus);
    }
    else
    {
      montoBancoBs = (montoBancoSus * monedaVenta).toFixed(2);
      $('#montoBancoBs').val(montoBancoBs);
    }
    $('#pagoBs').val(montoBancoBs);
    $('#pagoSus').val(montoBancoSus);
    totalpagoBs = montoBancoBs;
    totalpagoSus = montoBancoSus;
    cambioBs = (montoBancoBs - totalpagoBs).toFixed(2);
    cambioSus = (montoBancoSus - totalpagoSus).toFixed(2);
    $('#totalpagoBs').text(totalpagoBs);
    $('#totalpagoSus').text(totalpagoSus);
    $('#cambioBs').text(cambioBs);
    $('#cambioSus').text(cambioSus);

    $('#txtTotalpagoBs').val(totalpagoBs);
    $('#txtTotalpagoSus').val(totalpagoSus);
    $('#txtCambioBs').val(cambioBs);
    $('#txtCambioSus').val(cambioSus);
  }
  else if ($('#tipoPago').val() == "be")
  {
    if (tipo==0)
    {
      montoSus = (montoBs / monedaVenta).toFixed(2);
      montoBancoSus = (montoBancoBs / monedaVenta).toFixed(2);
      pagoSus = (pagoBs / monedaVenta).toFixed(2);
      $('#montoSus').val(montoSus);
      $('#montoBancoSus').val(montoBancoSus);
      $('#pagoSus').val(pagoSus);
    }
    else
    {
      montoBs = (montoSus * monedaVenta).toFixed(2);
      montoBancoBs = (montoBancoSus * monedaVenta).toFixed(2);
      pagoBs = (pagoSus * monedaVenta).toFixed(2);
      $('#montoBs').val(montoBs);
      $('#montoBancoBs').val(montoBancoBs);
      $('#pagoBs').val(pagoBs);
    }
    totalpagoBs = (parseFloat(montoBs) + parseFloat(montoBancoBs)).toFixed(2);
    totalpagoSus = (parseFloat(montoSus) + parseFloat(montoBancoSus)).toFixed(2);
    cambioBs = (pagoBs - montoBs).toFixed(2);
    cambioSus = (pagoSus - montoSus).toFixed(2);
    $('#totalpagoBs').text(totalpagoBs);
    $('#totalpagoSus').text(totalpagoSus);
    $('#cambioBs').text(cambioBs);
    $('#cambioSus').text(cambioSus);

    $('#txtTotalpagoBs').val(totalpagoBs);
    $('#txtTotalpagoSus').val(totalpagoSus);
    $('#txtCambioBs').val(cambioBs);
    $('#txtCambioSus').val(cambioSus);
  }
}
