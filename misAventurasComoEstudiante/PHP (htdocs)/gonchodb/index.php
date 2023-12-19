<?php

include "gonchodb.php";

$conexion = new Gonchodb("crm");
$apellido = 'Aguirre';
//$conexion->peticion("CREATE TABLE clientes (id,nombre,apellidos,email,telefono)");
// $conexion->peticion('INSERT INTO clientes VALUES ("2","JV","Carratala","jv@goncho.com","636516536")');

//$conexion->peticion("CREATE TABLE productos (id,nombreproducto,precio,dimensiones,descripcion)");
//$conexion->peticion('INSERT INTO productos VALUES ("1","teclado","120","80x15x7","corsair k95 rgb")');
/*
$datos = $conexion->peticion("SELECT * FROM clientes");
echo '<table border="1">';
echo "<tr><td>nombre</td><td>apellidos</td><td>telefono</td><td>email</td></tr>";
for($i = 0;$i<count($datos);$i++){
    echo "<tr><td>".$datos[$i]['nombre']."</td><td>".$datos[$i]['apellidos']."</td><td>".$datos[$i]['email']."</td><td>".$datos[$i]['telefono']."</td></tr>";
}
echo "</table>";
*/

$datos = $conexion->peticion("DELETE * FROM clientes WHERE apellidos = '$apellido'");
/*
echo "Vamos a ver lo que queda despues de eliminar <br>";

$datos = $conexion->peticion("SELECT * FROM clientes");
echo '<table border="1">';
echo "<tr><td>nombre</td><td>apellidos</td><td>telefono</td><td>email</td></tr>";
for($i = 0;$i<count($datos);$i++){
    echo "<tr><td>".$datos[$i]['nombre']."</td><td>".$datos[$i]['apellidos']."</td><td>".$datos[$i]['email']."</td><td>".$datos[$i]['telefono']."</td></tr>";
}
echo "</table>";
*/
?>