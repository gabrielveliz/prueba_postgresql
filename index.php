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
  	echo "<p>ID : $row[0]  - Nombre : $row[1]
	<form action='delete.php' method='post'>
	<input type='hidden' name='id' value='".$row[0]."'>
	<input type='submit' value='Eliminar Registro'>
	</form></p>";
}
	?>

<form action="insert.php" method="post">
	<label>nombre</label>
	<input type="text" name="nombre" checked="">
	<input type="submit" value="Agregar">
</form>
</body>
</html>