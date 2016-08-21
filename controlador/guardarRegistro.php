<?php

session_start();
include_once '../DAOConeccion/coneccion.php';
$cn = new Coneccion();
$cn->Conectarse();
$datos = $_POST["inf"];
$valores = json_decode($datos);
$idUsuario = $_SESSION["idUsuario"];
$sql = "INSERT INTO compania (idUsuario, ocupacion, pais, telefono, nombre, direccion) VALUES ('$idUsuario','" . $valores->ocupacion . "','" . $valores->estado . "','" . $valores->telefono . "','" . $valores->compania . "','" . $valores->direccion . "')";
$datos = mysql_query($sql);
if ($datos == false) {
    echo mysql_error();
} else {
    $sqlPreguntas = "INSERT INTO preguntas (idUsuario, nombreProyecto, descripcionProyecto, dineroRequrido, inversionInicial, mision, vision, valores, palabrasClaves) VALUES "
            . "('$idUsuario','" . $valores->compania . "','" . $valores->descripcion . "','" . $valores->dineroRequerido . "','" . $valores->inversionInicial . "','" . $valores->mision . "','" . $valores->vision . "','" . $valores->valores . "','$valores->claves')";
    $datosPreguntas = mysql_query($sqlPreguntas);
    if ($datosPreguntas == true) {
        $sqlUpdate = "UPDATE usuarios SET estado = 1 WHERE id='$idUsuario'";
        $datosUpdate = mysql_query($sqlUpdate);
        if ($datosUpdate == true) {
            echo 1;
        }else{
            echo 0;
        }
        
    }
}