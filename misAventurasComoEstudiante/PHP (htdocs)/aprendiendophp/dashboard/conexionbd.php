<?php
$servername = "localhost";
$username = "cursoaplicacionesweb";
$password = "cursoaplicacionesweb";
$dbname = "cursoaplicacionesweb";

// Crea una nueva conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión falló
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 
// Cierra la conexión
//$conn->close();
?>