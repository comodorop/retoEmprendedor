<?php

class Coneccion {

    function Conectarse() {
        if (!($link = mysql_connect("localhost", "root", ""))) {
            echo "Error conectando a la base de datos";
            exit();
        }
        if (!mysql_select_db("gestionproyecto", $link)) {
            echo "NO SELECCIONO LA BASE DE DATOS";
            exit();
        }
        return $link;
    }

    function cerrarBd() {
        mysql_close();
    }

//    CONNECCION DE NO TENGO IDEA
//    function Conectarse() {
//        if (!($link = mysql_connect("db619426438.db.1and1.com", "dbo619426438", "C0ntr4senia"))) {
//            echo "Error conectando a la base de datos";
//            exit();
//        }
//        if (!mysql_select_db("db619426438", $link)) {
//            echo "NO SELECCIONO LA BASE DE DATOS";
//            exit();
//        }
//        return $link;
//    }
//    function cerrarBd() {
//        mysql_close();
//    }
//    CONNECCION DE GODADDY
//    function Conectarse() {
//        if (!($link = mysql_connect("localhost", "oaxacaMiel", "(miel)!2"))) {
//            echo "Error conectando a la base de datos";
//            exit();
//        }
//        if (!mysql_select_db("oaxacaMiel", $link)) {
//            echo "NO SELECCIONO LA BASE DE DATOS";
//            exit();
//        }
//        return $link;
//    }
//
//    function cerrarBd() {
//        mysql_close();
//    }
}
