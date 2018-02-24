var Nombre;

function GuardarNombre(valor)
{
    Nombre = valor;
}

function GuardarCuentaImpuesto(id)
{
    $('#loading').css('display','block');
    $('#myModal').modal('hide')
    $.get('guardar_cuenta_automatica/'+id+'/'+Nombre, function(respuesta){
        location.reload();
        $('#loading').css('display','none');
    });
}

function ModificarCuentaImpuesto(id)
{
    $('#loading').css('display','block');
    $('#myModalEdit').modal('hide');
    $.get('modificar_cuenta_automatica/'+id+'/'+Nombre, function(respuesta){
        location.reload();
        $('#loading').css('display','none');
    });
}