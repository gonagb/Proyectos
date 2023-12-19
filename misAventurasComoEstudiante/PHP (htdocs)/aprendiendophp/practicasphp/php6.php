<?php

// Abro la conexión con la base de datos (Activar MySQL en Xampp)
$link = mysqli_connect("localhost", "cursoweb", "cursoweb", "cursoaplicacionesweb");

// Le pido algo a la base de datos
$resultado = mysqli_query($link, "SELECT * FROM usuarios");
// Devuelvo por pantalla lo que he pedido
while ($row = $resultado->fetch_assoc()){
    echo $row ['nombre']." ".$row['apellidos']."<br>";
}
// Cierro los recursos que haya abierto
mysqli_close($link);
?>