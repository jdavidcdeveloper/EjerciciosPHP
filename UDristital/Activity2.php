<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U5Activity2</title>
</head>

<body>
    <form action="Activity2.php" method="post">
        <h2>EJERCICIO DE EDAD</h2>
        Ingrese su edad:
        <input type="number" name="age" required> <br> <br>
        <input type="submit" value="Enviar" name="send"> <br> <br>
    </form>
</body>
</html>

<?php
if (isset($_POST['send'])) {

    $userAge = $_POST['age']; 

   if($userAge < 18){
    echo "No eres mayor de edad";
    
}else{    
    echo "Eres mayor de edad";
   }  
}
?>