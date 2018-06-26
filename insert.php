<?php
include "coneccion.php";

$nombre=$_POST['nombre'];

$query="insert into catalogo (nombre) values('$nombre')";
$ejecutar= pg_query($conex, $query);

header("Location:index.php");
?>