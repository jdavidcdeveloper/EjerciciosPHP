<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U5Activity4</title>
</head>

<body>
    <form action="Activity4.php" method="post">
    <h2>EJERCICIO CALCULAR EDAD</h2>
    <label for="birthdate">Fecha de Nacimiento:</label>
        <input type="date" name="birthdate" id="birthdate" required
               value="<?php echo isset($_POST['birthdate']) ? htmlspecialchars($_POST['birthdate']) : ''; ?>">
        <input type="submit" value="Calcular Edad">
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthdate = $_POST["birthdate"];
    $today = date("Y-m-d");
    $age = date_diff(date_create($birthdate), date_create($today))->y;

    if ($age < 18) {
        echo "Su edad es $age, por tanto: No es mayor de edad";
    } else {
        echo "Su edad es $age, por tanto: Es mayor de edad";
    }
}
?>