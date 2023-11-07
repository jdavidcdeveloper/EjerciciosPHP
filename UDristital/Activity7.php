<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "mi_proyecto";

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$database'";  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filtro = $_POST["filter"];
    

    $sql = "SELECT * FROM usuarios WHERE cedula LIKE '%$filtro%'";
    
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<h3>Resultados:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Cédula</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td><td>{$row['apellido']}</td><td>{$row['cedula']}</td></tr>";
        }
        
        echo "</table>";
    } else {
        echo "No se encontraron resultados.";
    }
}

$conexion->close();
?>
