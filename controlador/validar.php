<?php

session_start();
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$user = $_GET["email"];
$pass = $_GET["pass"];
$sql = "SELECT * FROM usuarios WHERE usuario = '$user' and pass = '$pass'";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
    $x = mysql_affected_rows();
    if ($x > 0) {
        while ($rs = mysql_fetch_array($datos)) {
            $nombre = $rs["nombre"];
            $idUsuario = $rs["id"];
        }
        $_SESSION["idUsuario"] = $idUsuario;
        $_SESSION["usuario"] = $user;
        $_SESSION["nombre"] = $nombre;
        echo 1;
    } else {
        echo 0;
    }
}