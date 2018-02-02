$(document).ready(function () {
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth() + 1;
    var yyyy = hoy.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }

    if (mm < 10) {
        mm = '0' + mm
    }
    hoy = yyyy + '-' + mm + '-' + dd;
    $('#fecha2').val(hoy);
});

function cerrar_gestion(id) {
    
    $("#myModalCerrar").modal('show');
    $("#id_cerrar_gestion").val(id);
}

/*function desactivar_gestion(id, button) {
    if ($(button).attr("data-status")==0) {
        $('#loading').css("display", "block");
        $.get('desactivar_gestion/' + id+'/0', function (response) {
            $('#loading').css("display", "none");
            $(button).removeClass();
            $(button).addClass("btn btn-success");
            $(button).text("ACTIVAR");
            $(button).attr("data-status","1");
            var descripcion = "Desactivado";
            $('#estado'+response["id"]).html(descripcion);
            $('#estado'+response["id"]).css("color","red");
        });
    }
    else{
        $('#loading').css("display", "block");
        $.get('desactivar_gestion/' + id+'/1', function (response) {
            if(response["estado"]=="0"){
                $('#loading').css("display", "none");
                $(button).removeClass();
                $(button).addClass("btn btn-danger");
                $(button).text("DESACTIVAR");
                $(button).attr("data-status","0");
                var descripcion = "Gestión Actual";
                $('#estado'+response["id"]).html(descripcion);
                $('#estado'+response["id"]).css("color","green");
            }
            else{
                $('#loading').css("display", "none");
                $(button).removeClass();
                $(button).addClass("btn btn-danger");
                $(button).text("DESACTIVAR");
                $(button).attr("data-status","0");

                var descripcion = "Gestión Actual";
                $('#estado'+response["id"]).html(descripcion);
                $('#estado'+response["id"]).css("color","green");

                $('#btn'+response["idGestionAntigua"]).removeClass();
                $('#btn'+response["idGestionAntigua"]).addClass("btn btn-success");
                $('#btn'+response["idGestionAntigua"]).text("ACTIVAR");
                $('#btn'+response["idGestionAntigua"]).attr("data-status","1");

                var descripcion2 = "Desactivado";
                $('#estado'+response["idGestionAntigua"]).html(descripcion2);
                $('#estado'+response["idGestionAntigua"]).css("color","red");
            }
        });
    }
}*/
//   $.ajax({
//      url:'desactivar_gestion',
//    headers: {'X-CSRF-TOKEN': token},
//     dataType: 'json',
//     type: 'POST',
//     data:{id:id},
//     succes:function(data, textStatus, jqXHR){
//            
//             
//            
//             
//     },error:function(){
//            alert("adfadf");
//     }
//   });
