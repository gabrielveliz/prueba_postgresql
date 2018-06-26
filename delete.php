<?php
include "coneccion.php";

$id=$_POST['id'];

$query="delete from catalogo where id_catalogo='$id'";
$ejecutar= pg_query( $conex, $query );

header("Location:index.php");

?>