<?php
include "coneccion.php";

$result = pg_query($conex, "SELECT * FROM catalogo");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>prueba php ajax</title>
	<link rel="stylesheet" href="">
	
</head>
<body>
	<?php
	while ($row = pg_fetch_row($result)) {
  	echo "<p>ID : $row[0]  - Nombre : $row[1]</p>";
  
}
	?>
</body>
</html>