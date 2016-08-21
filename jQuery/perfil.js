$(document).ready(function () {
    $("#informacion").hide();
    $("#registro").hide();
    $.get("../controlador/validarRegistro.php", function (respuesta) {
        if (respuesta == 1) {
            $("#informacion").show();
            $("#registro").hide();
        } else if (respuesta == 0) {
            $("#myModal").modal('show');
            $("#informacion").hide();
            $("#registro").show();
        }
    });

});