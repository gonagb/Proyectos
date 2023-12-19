<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "gonagb";
$password = "MiPrimeraPaginaWeb";
$dbname = "blogdb";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>
