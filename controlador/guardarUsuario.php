<?php
session_start();
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$user = $_GET["user"];
$pass = $_GET["pass"];
$nombre = $_GET["nombre"];
$sql = "INSERT INTO usuarios (nombre, usuario, pass) VALUES ('$nombre','$user','$pass')";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
//    $datos = mysql_affected_rows();
//    if ($datos > 0) {
//        $_SESSION["usuario"] = $user;
        echo 1;
//    } else {
//        echo 0;
//    }
}