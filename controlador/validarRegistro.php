<?php

session_start();
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$idUsuario = $_SESSION["idUsuario"];
$sql = "SELECT * from usuarios WHERE id='$idUsuario'";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
    while ($rs = mysql_fetch_array($datos)) {
        echo $rs["estado"];
    }
}