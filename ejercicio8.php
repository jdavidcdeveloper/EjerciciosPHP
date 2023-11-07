<?php

if ($_POST){
    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];

    $suma=$ValorA+$ValorB;
    $resta=$ValorA-$ValorB;    
    $multiplicación=$ValorA*$ValorB;
    $división=$ValorA/$ValorB;

    echo "</br>".$suma;
    echo "</br>".$resta;    
    echo "</br>".$multiplicación;
    echo "</br>".$división;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Operadores Aritméticos</title>
</head>

<body>
    <form action="ejercicio8.php" method="post">
        Valor A:
        <input type="text" name="ValorA" id="">
        </br>
        Valor B:
        <input type="text" name="ValorB" id="">
        </br>
        <input type="submit" value="Calcular" id="">

        </form>
  </body>
</html> 