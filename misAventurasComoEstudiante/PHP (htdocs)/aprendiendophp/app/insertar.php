<?php 
session_start();
include "conexionbd.php";
    $peticion = "  
    INSERT INTO
    usuarios
    VALUES
    (NULL,
    '".$_POST['usuario']."',
    '".$_POST['password']."',
    '".$_POST['nombre']."',
    '".$_POST['apellidos']."',
    '',
    '',
    '')
    ";
mysqli_query($conn,$peticion );


// Cierro los recursos que haya abierto
    mysqli_close($conn);
// END
echo '<meta http-equiv="Refresh" content="3; url=controlpanel.php">';

?>