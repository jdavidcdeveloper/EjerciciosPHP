<?php

$jsonContenido = '[
    {"nombre":"Juan", "apellido":"Castro"},
    {"nombre":"Oscar", "apellido":"Uh"}
]';

$resultado = json_decode($jsonContenido);
// print_r($resultado);



foreach ($resultado as $persona) {
    echo ($persona->nombre)." ".($persona->apellido."</br>");
}
