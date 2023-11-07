<?php

$txtNombre = "";
$lenguaje = "";
$checkphp = "";
$checkhtml = "";
$checkcss = "";
$serie = "";
$txtComentario = "";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $lenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

    $checkphp = (isset($_POST['checkphp']) == "si") ? "checked" : "";
    $checkhtml = (isset($_POST['checkhtml']) == "si") ? "checked" : "";
    $checkcss = (isset($_POST['checkcss']) == "si") ? "checked" : "";

    $serie = (isset($_POST['serie'])) ? $_POST['serie'] : "";
    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";
}

// print_r($_POST); //alternativa para imprimir los valores que vienen en el envío

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) {

    ?>
        <strong>Hola </strong> <?php echo $txtNombre; ?> </br></br>
        <strong>Tu lenguaje favorito es </strong> <?php echo $lenguaje; ?> </br></br>
        <strong>Estás aprendiendo </strong> </br>
        <?php echo ($checkphp == "checked") ? "-PHP" . "</br>" : ""; ?>
        <?php echo ($checkhtml == "checked") ? "-HTML" . "</br>" : ""; ?>
        <?php echo ($checkcss == "checked") ? "-CSS" . "</br>" : ""; ?>
        </br>
        <strong>Tu serie favorita es </strong></br>
        <?php echo $serie; ?> </br> </br>

        <strong>Tu mensaje es </strong> </br>
        <?php echo $txtComentario; ?> </br> </br>

    <?php

    } ?>
    <form action="ejercicio31.php" method="post">

        Nombre:</br>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        </br></br>
        ¿Cuál te gusta?</br>


        php:</br> <input type="radio" <?php echo ($lenguaje == "php") ? "checked" : "" ?> name="lenguaje" value="php" id=""></br>
        html:</br> <input type="radio" <?php echo ($lenguaje == "html") ? "checked" : "" ?> name="lenguaje" value="html" id=""></br>
        css:</br> <input type="radio" <?php echo ($lenguaje == "css") ? "checked" : "" ?> name="lenguaje" value="css" id=""></br>
        </br>
        Estás aprendiendo: </br>

        php:</br> <input type="checkbox" <?php echo $checkphp; ?> name="checkphp" value="si" id="">
        html:</br> <input type="checkbox" <?php echo $checkhtml; ?> name="checkhtml" value="si" id="">
        css:</br> <input type="checkbox" <?php echo $checkcss; ?> name="checkcss" value="si" id=""> </br>
        </br>
        ¿Cuál serie es tu favorita? </br>
        <select name="serie" id="">
            <option value="">[Ninguna serie]</option>
            <option value="Game of Thrones" <?php echo ($serie == "Game of Thrones") ? "selected" : ""; ?>>Game of Thrones</option> </br>
            <option value="Breaking Bad" <?php echo ($serie == "Breaking Bad") ? "selected" : ""; ?>>Breaking Bad</option> </br>
            <option value="Chernovil" <?php echo ($serie == "Chernovil") ? "selected" : ""; ?>>Chernovil</option> </br>
        </select>
        </br> </br>
        ¿Tienes alguna duda?</br>
        <textarea name="txtComentario" id="" cols="30" rows="10">  <?php echo $txtComentario; ?> </textarea>
       





        <input type="submit" value="Enviar información">

    </form>

</body>

</html>