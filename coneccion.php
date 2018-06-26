<?php

$user="postgres";
$pas="66126934";
$host="localhost";
$bd="prueba";

$conex=pg_connect("host='$host' dbname='$bd' port=5432 user='$user' password='$pas'") or die ("Error de conexion : ".pg_last_error());

?>