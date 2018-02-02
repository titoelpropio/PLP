

function ModificarCuentaBanco(idCuenta,idBanco,tipoCuenta,moneda,nroCuenta)
{
    $("#idCuentaM").val(idCuenta);
    $("#idBancoM").val(idBanco);
    $("#tipoCuentaM").val(tipoCuenta);
    $("#monedaM").val(moneda);
    $("#nroCuentaM").val(nroCuenta);
}

function EliminarCuentaBanco(idCuenta,idBanco)
{
    $("#idCuentaBancoE").val(idCuenta);
    $("#idBancoE").val(idBanco);
}