<?php 
$servidor = "fdb29.awardspace.net";
$nombreusuario = "3521537_clinica";
$password = "chaquiT12.";
$db = "3521537_clinica";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexion fallida: " . $conexion->connect_error);

}

?>