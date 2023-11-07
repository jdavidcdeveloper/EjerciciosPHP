<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U5Activity1</title>
</head>

<body>
    <form action="Activity1.php" method="post">
        <h2>EJERCICIO DE OPERACIONES</h2>
        Ingrese el primer número:
        <input type="number" name="numberOne" required> &nbsp; &nbsp;
        Ingrese el segundo número:
        <input type="number" name="numberTwo" required> <br> <br>
        Seleccione el tipo de operación:
        <select name="option">
            <option value="1">Sumar</option>
            <option value="2">Restar</option>
            <option value="3">Multiplicar</option>
            <option value="4">Dividir</option>
        </select> <br> <br>
        <input type="submit" value="Calcular" name="operate"> <br> <br>
    </form>
</body>

</html>

<?php

if (isset($_POST['operate'])) {

    $n1 = $_POST['numberOne'];
    $n2 = $_POST['numberTwo'];
    $opt = $_POST['option'];
    $result = 0;

    switch ($opt) {
        case '1':
            $result = $n1 + $n2;
            break;
        case '2':
            $result = $n1 - $n2;
            break;
        case '3':
            $result = $n1 * $n2;
            break;
        case '4':
            $result = $n1 / $n2;
            break;
    }
    echo "El resultado es: ".$result;
}



?>