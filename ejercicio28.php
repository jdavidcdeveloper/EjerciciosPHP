<?php

$server = "localhost"; //127.0.0.1
$user = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto1.jpg');";
    $connection->exec($sql);
    echo "Conexión exitosa";
} catch (PDOException $error) {
    echo "Conexión errónea" . $error;
}
