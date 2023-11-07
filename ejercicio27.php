<?php

class UnaClase{

public static function unMetodo(){
echo "Hola soy un método estático"."</br>";

    }
}

$obj=new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo();