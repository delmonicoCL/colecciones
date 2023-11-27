<?php


function openBd() {

    $servername = "localhost";
    $username = "root";
    $password = "mysql";
   
    $conexion = new PDO("mysql:host=$servername;dbname=colecciones", $username, $password);
    // set the PDO error mode to exception
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("set names utf8");

    return $conexion;
   
}


function closeBd(){

    return null;
}


function SelectAlbunes()
{

    $conexion = openBd();
    $sentenciaText = "select * from albums";
    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchALL();

    $conexion = closeBD();
    return $resultado;

}

?>