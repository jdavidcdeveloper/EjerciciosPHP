<?php

if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['idnumber'])) {
    $userFN = $_GET['firstname'];
    $userLN = $_GET['lastname'];
    $userID = $_GET['idnumber'];

    echo "Nombre: $userFN<br>";
    echo "Apellido: $userLN<br>";
    echo "Número de Cédula: $userID<br>";
} else {
    echo "No se han proporcionado datos.";
}

?>