<?php

if ($_POST) {
    $ValorA = $_POST['ValorA'];
    $ValorB = $_POST['ValorB'];

    if (($ValorA > $ValorB)&&($ValorA != $ValorB)) {
        echo "El valor de A es mayor que el valor de B y también es diferente ";
    }

    else if (($ValorA < $ValorB)&&($ValorA != $ValorB)) {
        echo "El valor de A es menor que el valor de B y también es diferente ";
    }

    else if (($ValorA = $ValorB)||($ValorB != $ValorA)) {
        echo "Ambos valores son iguales ";
    }

   else {
        echo "No se han ingresado valores o falta alguno de los valores";
    }
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
    <form action="ejercicio10.php" method="post">
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