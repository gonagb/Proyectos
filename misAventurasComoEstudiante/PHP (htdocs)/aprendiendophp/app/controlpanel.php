<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/80f79e2c14.js" crossorigin="anonymous"></script><style>
    body,html,{
        background: white;
        font-family: sans-serif;
    }
    header{
        background: black;
        color: white;
        padding: 10px;
        width: 100$;
        height: 20px;
        text-align: right;
    }
    header a{
        color: inherit;
        text-decoration: none;

    }
    table tr:nth-child(odd){
        background:rgb(220, 220, 220);
        padding: 5px;
    }
    table td td{
        padding: 5px;
    }
</style>
</head>
<body>
    
<?php
session_start();
    if(!isset($_SESSION['correcto']) || ($_SESSION['correcto']) == false){
        die("Te has intentado colar en el Panel de Control sin permiso");
    }
    echo "<header>Bienvenido, ".$_SESSION['nombre']." ".$_SESSION['apellidos']." - ";
    echo "<a href='logout.php'>Cerrar sesión</a></header>"
?>
Si estas viendo esto es que estas en el panel de Control
<h1> Gestión de usuarios</h1>
<table cellpadding=0 cellspacing=0>
    <tr>
    <th>Usuario</th>
    <th>Contraseña</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    </tr>
<?php 
include "conexionbd.php";
// $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
$peticion = "SELECT * FROM usuarios";
$resultado = mysqli_query($conn,$peticion);
while ($row = $resultado->fetch_assoc()) {
    echo '<tr>
        <td>'.$row['usuario'].'</td>
        <td>'.$row['password'].'</td>
        <td>'.$row['nombre'].'</td>
        <td>'.$row['apellidos'].'</td>
        <td><a href="ver.php?id='.$row['Identificador'].'"><i class="fa-solid fa-eye"></i></a></td>
        <td><a href="actualizar.php?id='.$row['Identificador'].'"><i class="fa-solid fa-arrows-rotate"></i></a></td>
        <td><a href="eliminar.php?id='.$row['Identificador'].'"><i class="fa-solid fa-trash"></i></a></td>
    </tr>';
}
?>
<tr>
    <form action=insertar.php method="POST">
        <td><input type="text" name="usuario" placeholder="usuario"></td>
        <td><input type="text" name="password" placeholder="password"></td>
        <td><input type="text" name="nombre" placeholder="nombre"></td>
        <td><input type="text" name="apellidos" placeholder="apellidos"></td>
        <td><input type="submit" value="Enviar"></td>

    </form>
</tr>
</table>
</body>
</html>