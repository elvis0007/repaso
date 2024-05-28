<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estudiantes";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion']; 


$sql = "INSERT INTO estudiante (cedula, nombre, apellido, direccion) VALUES ('$cedula', '$nombre', '$apellido', '$direccion')";

if ($conn->query($sql) === TRUE) {
    echo "Estudiante registrado correctamente.";
} else {
    echo "Error al registrar estudiante: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
