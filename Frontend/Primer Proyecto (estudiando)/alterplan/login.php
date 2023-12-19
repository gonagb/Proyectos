<?php 
session_start();
// Abro la conexión con la base de datos (Activar MySQL en Xampp)
    $conn = mysqli_connect ("localhost", "alterplan2023", "alterplan2023", "alterplan");

// Le pido algo a la base de datos
    $peticion = "  
    SELECT * FROM usuarios
    WHERE
        usuario = '".$_POST['usuario']."' AND
        password = '".$_POST['password']."'
        LIMIT 1
    ";
$resultado = mysqli_query($conn,$peticion );

$correcto = false;
$_SESSION['correcto'] = false;

// Devuelvo por pantalla lo que le he pedido
if ($row = $resultado->fetch_assoc()) {
   //  echo $row ['nombre']." ".$row['apellidos']."<br>";
$correcto = true;

}else{
    // echo "No reconozco ese usuario y/o contraseña"
    $correcto = false;
}

// Validamos
if($correcto){
    $_SESSION['correcto'] = true;
    echo '<meta http-equiv="Refresh" content="3; url=alterplan.php">';
    echo "Accediendo a Alter Plan";
}else{
    $_SESSION['correcto'] = false;
    echo "No tienes acceso a Alter Plan";
    echo '<meta http-equiv="Refresh" content="3; url=inicio.php">';
}
    
// Cierro los recursos que haya abierto
    mysqli_close($conn);
// END
?>