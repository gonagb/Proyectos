<?php 
    echo "Que sepas que el usuario que has enviado es ".$_POST['usuario']."<br>";
    echo "Que sepas que el password que has enviado es ".$_POST['password']."<br>";

// Abro la conexión con la base de datos (Activar MySQL en Xampp)
    $conn = new mysqli ("localhost", "alterplan2023", "alterplan2023", "alterplan");

// Le pido algo a la base de datos
    $peticion = "  
    SELECT * FROM usuarios
    WHERE
        usuario = '".$_POST['usuario']."',
        password = '".$_POST['password']."'
        LIMIT 1
    ";
    mysqli_query($conn,$peticion );
    echo $peticion."<br>";
// Cierro los recursos que haya abierto
    mysqli_close($conn);
// END
echo "El registro se ha metido en la base de datos";
?>