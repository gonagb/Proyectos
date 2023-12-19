<?php
session_start();
// Abro la conexión con la base de datos
    $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
// Le pido algo a la base de datos
    $peticion = "
    SELECT * FROM usuarios
    WHERE
    usuario = '".$_POST['usuario']."'
    AND
    password = '".$_POST['password']."'
    LIMIT 1
    ";
    $resultado = mysqli_query($enlace,$peticion);

    $pasas = false;
    $_SESSION['pasas'] = false;

    if($fila = $resultado->fetch_assoc()) {
        //echo $fila['nombre']."".$fila["apellidos"]."<br>";
        $pasas = true;
        $_SESSION['nombre'] = $fila['nombre'];
    }else{
        //echo "No hay ningún usuario que cumpla con las caracteristicas";
        $pasas = false;
    }

    // Validamos
    if($pasas){
        $_SESSION['pasas'] = true;
        echo "Te voy a dar acceso a la aplicación";
        echo '<meta http-equiv="refresh"
        content="2; url=index.php">';
    }else{
        $_SESSION['pasas'] = false;
        echo "No te voy a dar acceso a la aplicación";
        echo '<meta http-equiv="refresh"
        content="2; url=iniciasesion.php">';
    }

// Cierro los recursos que haya abierto
    mysqli_close($enlace);
?>