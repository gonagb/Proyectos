<?php
include "conexionbd.php";
$peticion = "
SELECT * FROM ".$_GET['tabla']." 
WHERE Identificador = ".$_GET['id']."
";
$resultado = mysqli_query($conn,$peticion );
while ($row = $resultado->fetch_assoc()) {
    echo '
        Usuario: '.$row['usuario'].'<br>
        Contraseña: '.$row['password'].'<br>
        Nombre: '.$row['nombre'].'<br>
        Apellidos: '.$row['apellidos'].'<br>
        ';
}
?>
<a href="controlpanel.php">Volver a la pagina anterior</a>