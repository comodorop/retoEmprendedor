$(document).ready(function () {
    $("#cmbMentor").change(function () {
        var idMentor = $("#cmbMentor").val();
//        alert(idMentor);
        $("#contenedor").load("../controlador/dameProyectos.php?id=" + idMentor);
    });
});