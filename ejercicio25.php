<?php

class persona2
{

    public $nombre; //propiedades
    private $edad;
    protected $altura;




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

class trabajador extends persona2 {
    public $cargo;

    public function presentacion(){
        echo "Mi nombre es ".$this->nombre." y mi cargo es ".$this->cargo;
    }


}


$objTrabajador = new trabajador(); //instancia o creación de un objerto
$objTrabajador->asignarNombre("Juan D");
$objTrabajador->cargo="Desarrollador";

$objTrabajador->presentacion();


?>
