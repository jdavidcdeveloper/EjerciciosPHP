<?php

session_start();
if (isset($_SESSION["user"])) {
    echo "usuario " . $_SESSION["user"] . "</br>" . " estatus: " . $_SESSION["status"];
} else {
    echo "No hay datos";
}

