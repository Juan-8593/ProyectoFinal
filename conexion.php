<?php
$host = "localhost";     
$usuario = "root";       
$contrasena = "";          
$baseDeDatos = "jjlcars";  


$conexion = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>
