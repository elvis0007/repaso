<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estudiantes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_GET['nombre'];

$sql = "SELECT * FROM estudiante WHERE nombre LIKE '%$nombre%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "
        <strong>Nombre:</strong> " . $row["nombre"] . "<br>
        <strong>Apellido:</strong> " . $row["apellido"] . "<br>
        <strong>Dirección:</strong> " . $row["direccion"] . "<br><br>";
    }
} else {
    echo "No se encontraron estudiantes.";
}

$conn->close();
?>
