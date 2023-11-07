<?php

session_start();

$_SESSION["user"]="David";
$_SESSION["status"]="En línea";

echo "Sesión iniciada".":</br>";
echo "usuario ".$_SESSION["user"]."</br>"." estatus: ".$_SESSION["status"];  
