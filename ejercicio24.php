<?php

class persona1
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


$objAlumno = new persona1(); //instancia o creación de un objeto
$objAlumno->asignarNombre("Juan David");

$objAlumno2 = new persona1(); //instancia o creación de un objeto
$objAlumno2->asignarNombre("Pedro");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre . "<br/>";
echo $objAlumno2->nombre . "<br/>";
echo $objAlumno2->imprimirEdad() . "<br/>";//private

?>
