<?php
include "conexionbd.php";
$peticion = "
UPDATE usuarios
SET usuario = '".$_POST['usuario']."',
password ='".$_POST['password']."',
nombre ='".$_POST['nombre']."',
apellidos ='".$_POST['apellidos']."'
WHERE 
Identificador = ".$_POST['Identificador']."
";
mysqli_query($conn,$peticion);
echo '<meta http-equiv="Refresh" content="3; url=controlpanel.php">';

?>