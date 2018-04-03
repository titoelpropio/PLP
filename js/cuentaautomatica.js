var Nombre;

function GuardarNombre(valor)
{
    Nombre = valor;
}

function GuardarCuentaAutomatica(id)
{
    $('#loading').css('display','block');
    $('#myModal').modal('hide')
    $.get('guardar_cuenta_automatica', {id:id,nombre:Nombre},function(respuesta){
        location.reload();
        $('#loading').css('display','none');
    });
}

function ModificarCuentaAutomatica(id)
{
    $('#loading').css('display','block');
    $('#myModalEdit').modal('hide');
    $.get('modificar_cuenta_automatica', {id:id,nombre:Nombre},function(respuesta){
        location.reload();
        $('#loading').css('display','none');
    });
}