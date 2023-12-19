<?php
    session_start();
// Abro la conexión con la base de datos
    $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
// Le pido algo a la base de datos
    $peticion = "
    SELECT * FROM ".$_GET['tabla']." WHERE identificador = ".$_GET['id']."";
    $resultado = mysqli_query($enlace,$peticion);
    while ($fila = $resultado->fetch_assoc()){
        echo '
            Usuario: '.$fila['usuario'].'<br>
            Nombre: '.$fila['nombre'].'<br>
            Contaseña: '.$fila['password'].'<br>
        ';
    }
?>
 <a href="index.php">Volver al panel de control</a>