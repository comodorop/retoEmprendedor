
$(document).ready(function () {

});


function mostrarProyectos(idProyecto) {
//    alert(idProyecto);
    $("#contenedor").load("../controlador/cargarProyecto.php?idProyecto="+idProyecto);
}
