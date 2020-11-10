<!DOCTYPE html>
<html>
<head>
	<title>Tareas</title>
</head>
<body>
<!-- Colocamos el formulario para darle la opcion al cliente de meter su ID y su TAREA que le sea necesaria-->
<form action="funcion.php" method="post">
ID
<input type ="id" name = "id">
tarea
<input type ="tarea" name ="tarea">
<input type = "submit" name = "enviar">
</form>
<br>
<br>
	<table border = "5px">
		<tr><td>
<h2>PENDIENTES</h2>
<?php

#Para abrir el fichero y imprimir todas las lineas escribimos un while y colocamos dentro la variable de fgets.
$fichero = fopen ("Pendientes.txt", "a+b");
#Contador para poder empezar y seguir un orden, aunque el usuario no lo coloque
$count = 1;
	while ( $lineaP = fgets ($fichero)){
 		list ($id,$tarea) = explode (".",$lineaP);
 		if ($count == $id) {
 		$count++;
 		echo "$lineaP".PHP_EOL;
 		fseek($fichero,0);
 		}
	}

?>
</td></tr>
<tr> <td>
<h2>EN PROGRESO </h2>
<?php
# La tabla de en progreso, mismo codigo que la anterior
$fichero = fopen("Enprogreso.txt", "rb");
		$count = 1;
while ( $lineaE = fgets($fichero)) {
	
 		list($id,$tarea) = explode(".", $lineaE);
 		if ($count == $id) {
 		$count++;
 		echo "$lineaE".PHP_EOL;
 		fseek($fichero,0);
 		}
	} 


?>

</td></tr>

<tr><td>
	<h2> FINALIZADAS</h2>
<?php

$fichero = fopen("Finalizadas.txt", "rb");
	$count=1;
while ( $lineaF = fgets($fichero)) {
		list($id,$tarea) = explode(".", $lineaF);
 		if ($count == $id) {
 		$count++;
 		echo "$lineaF".PHP_EOL;
 		fseek($fichero,0);
		}
	}
fclose($fichero);
?>
</td></tr>
</table>
</body>
</html>