<?php


$Edad=29; //variables

echo $Edad."</br>";

$Edad=40;

echo $Edad."</br>"; //cambiar valor de variable

//USO DE CONSTANTE
define("NOMBRE", "JUAN");


//Imprimir constante
echo NOMBRE;


//Intento fallido sobre cambio de constante
$NOMBRE="Pedro";

echo NOMBRE; //Se vuelve a imprimir la constante definida



?>