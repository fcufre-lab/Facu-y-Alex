<?php 
$host= "localhost";
$usuario = "root";
$contraseña = " ";
$baseDatos = "proyecto";

$conexion =new mysqli($host, $usuario, $contraseña, $baseDatos);

if ($conexion->connect_error) {
    die("conexion fallida: " . $conexion->connect_error);
}