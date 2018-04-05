var i;

function GuardarIndex(valor)
{
    i = valor;
}

function AgregarCuentaImpuesto(id)
{
    $('#id_cuenta_'+i).html($('#id_agregar_'+id).html());
    $('#cuenta_'+i).html($('#nombre_agregar_'+id).html());
    $('#codigo_'+i).html($('#codigo_agregar_'+id).html());
    $('#myModal').modal('hide');
}

function ActualizarCuentaImpuesto(id)
{
    $('#id_cuenta_'+i).html($('#id_actualizar_'+id).html());
    $('#cuenta_'+i).html($('#nombre_actualizar_'+id).html());
    $('#codigo_'+i).html($('#codigo_actualizar_'+id).html());
    $('#myModalEdit').modal('hide');
}

function Guardar(index)
{
   $('#loading').css('display','block');
   if ($('#id_'+index).text() == "")
   {
      GuardarCuentaImpuesto(index);
   }
   else if ($('#id_'+index).text() != "")
   {
      ModificarCuentaImpuesto(index);
   }
}

function GuardarCuentaImpuesto(index)
{
    var nombre = $('#nombre_'+index).html();
    var id_cuenta = $('#id_cuenta_'+index).html();
    var porcentaje = $('#porcentaje'+index).val();

    $.ajax({
        url:'guardar_cuenta_impuesto',
        type: 'GET',
        dataType: 'json',
        data:{nombre:nombre,id_cuenta:id_cuenta,porcentaje:porcentaje},
        success:function(response){
            if (response.mensaje==1) {
                toastr.success('Guardado Correctamente');
                location.reload();
            }
            else{
                toastr.error('Error al guardar');
            }
      }
    });
}

function ModificarCuentaImpuesto(index)
{
    var id = $('#id_'+index).html();
    var nombre = $('#nombre_'+index).html();
    var id_cuenta = $('#id_cuenta_'+index).html();
    var porcentaje = $('#porcentaje'+index).val();

    $.ajax({
        url:'modificar_cuenta_impuesto',
        type: 'GET',
        dataType: 'json',
        data:{id:id,nombre:nombre,id_cuenta:id_cuenta,porcentaje:porcentaje},
        success:function(response){
            if (response.mensaje==1) {
                toastr.success('Modificado Correctamente');
                location.reload();
            }
            else{
                toastr.error('Error al guardar');
            }
      }
    });
}