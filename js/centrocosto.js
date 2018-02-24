$(document).ready(function(){
    $('#loading').css('display','none');
    $(".file-tree").filetree();
});

$(function () {
    $.contextMenu({
        selector: '.Menu-Context',
        callback: function (key, options) {
            switch(key){

                case 'AGREGAR':
                   var idMenu=$(this).attr('id');
                   $.get("buscarcentrocosto/"+idMenu, function (res) {
                   	    var cod = "";
                   	    var codigonuevo = "";
                   	    if(typeof(res.codigo[0]) != "undefined"){
                   	    	cod = res.codigo[0].codigo;
                   	    }
                   	    if(cod != ""){
                   	    	var codigo = cod.split(".");
                   	        codigo[codigo.length-2] = parseInt(codigo[codigo.length-2]) + 1;
                   	        codigonuevo = unir(codigo);
                   	    }
                   	    else{
                   	    	codigonuevo = res.centrocosto[0].codigo + "1.";
                   	    }
        				        $("#codigo").val(codigonuevo);
        				        $("#padre").val(res.centrocosto[0].nombre);
        				        $("#idpadre").val(res.centrocosto[0].id);
        				        $("#estadohijo").val(res.centrocosto[0].hijo);
                        $("#myModal").modal('show');
				            });
                break;

                case 'MODIFICAR':
                    var idMenu=$(this).attr('id');
                break;

                case 'ELIMINAR':
                    var idMenu=$(this).attr('id');
                break;

                case 'EXPANDIR':
                    $(".folder-root").removeClass("closed").addClass("open");
                break;

                case 'CONTRAER':
                    $(".folder-root").removeClass("open").addClass("closed");
                break;
            }
        },
        items: {
            "AGREGAR": {name: "Agregar", icon: "fa-plus-circle"},
            "MODIFICAR": {name: "Modificar", icon: "fa-pencil-square-o"},
            "ELIMINAR": {name: "Eliminar", icon: "fa-trash"},
            "EXPANDIR": {name: "Expandir todo", icon: "fa-expand"},
            "CONTRAER": {name: "Contraer todo", icon: "fa-compress"},
            "LINEA": "---------",
            "CERRAR": {name: "Cerrar", icon: function(){
                return 'context-menu-icon context-menu-icon-quit';
            }}
        }
    });

    $('.Menu-Context').on('click', function (e) {
        console.log('clicked', this);
    })
});

function unir(array)
{
	var codigo="";
	for (var i = 0; i < array.length-1; i++) {
       codigo = codigo + array[i] + ".";
    }
    return codigo;
}

$("#utilizable").change(function(event) {
	    if($("#utilizable").val() == "1"){
	    	$("#hijo").val("NO");
	    	$("#valorhijo").val("0");
	    }
        else{
        	$("#hijo").val("SI");
        	$("#valorhijo").val("1");
        }
})

function buscarultimocentrocosto(){
  $.get("buscarultimocentrocosto", function (res) {
      var cod = "";
      var codigonuevo = "";
      if(typeof(res[0]) != "undefined"){
        cod = res[0].codigo;
      }
      if(cod != ""){
        codigonuevo = (parseInt((res[0].codigo.replace(".", ""))) + 1) + ".";
      }
      else{
        codigonuevo = "1.";
      }
      $("#codigo").val(codigonuevo);
      $("#padre").val("NINGUNO");
      $("#idpadre").val("0");
      $("#estadohijo").val("");
  });
}