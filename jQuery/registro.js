$(document).ready(function () {
//    swal("Error", "Se requiere un nombre del tutor", "error");
    $("#registro").hide();
    $("#lknRegistro").click(function () {
//        $("#myModalRegistro").modal('show');
        $("#registro").show();
        $("#login").hide();
    });


    $("#btnAcceder").click(function () {
        $("#login").show();
        $("#registro").hide();
    });


    $("#loguearse").click(function () {
//        alert("entro");
        var email = $("#txtEmailL").val();
        var pass = $("#txtPasswordL").val();
        if (email == "") {
            swal("Ups!", "Ingrese un email", "error");
        } else if (pass == "") {
            swal("Ups!", "Ingrese una contraseña", "error");
        } else {
            $.post("../controlador/validar.php?pass=" + pass + "&email=" + email, function (respuesta) {
                if (respuesta == 0) {
                    swal("Ups!", "Credenciales no validas", "error");
                } else if (respuesta == 1) {
                    window.location.href = "perfil.php";
                }
            });
        }
    });


    $("#btnRegistrarse").click(function () {
        var nombre = $("#txtNombreR").val();
        var pass = $("#txtPassR").val();
        var user = $("#txtEmailR").val();
        $.post("../controlador/guardarUsuario.php?nombre=" + nombre + "&user=" + user + "&pass=" + pass, function (respuesta) {
            if (respuesta == 1) {
                swal("Exito!", "Nuevo usuario disponible", "Success");
                $("#login").show();
                $("#registro").hide();
            }
        });
    });
});