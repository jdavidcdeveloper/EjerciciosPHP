<?php

class persona3
{

    public $nombre; //propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){

        $this->nombre = $nuevoNombre;

    }


    public function asignarNombre($nuevoNombre)
    { // acciones o métodos...

        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){
    echo "Hola soy ".$this->nombre. "<br/>";    
    }
    public function imprimirEdad(){
        $this->edad =30;
        return $this->edad;  
    }
}







$objAlumno = new persona3("Juan David C"); //instancia o creación de un objerto
// $objAlumnor->asignarNombre("Juan D");
$objAlumno->imprimirNombre();



?>
 