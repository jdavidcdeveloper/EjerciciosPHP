<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mi_proyecto";

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$database'";  
}

$conexion->close();
?>