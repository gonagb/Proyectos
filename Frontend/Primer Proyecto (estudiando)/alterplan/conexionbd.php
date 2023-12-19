<?php
$servername = "localhost";
$username = "alterplan2023";
$password = "alterplan2023";
$dbname = "alterplan";

// Crea una nueva conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión falló
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 
echo "<script>console.log('Conexión realizada con éxito' );</script>";

// Cierra la conexión
$conn->close();
?>