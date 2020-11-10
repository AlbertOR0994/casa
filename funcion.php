<?php
# Introducir la ID y la tarea.
	$id1 = $_POST ["id"];
	$tf = $_POST ["tarea"];
	#Abrimos el fichero de pendientes.txt y en modo escritura y lectura.
	$fichero = fopen("Pendientes.txt", "a+b");
	#pondremos un contador para que el validor tenga una referencia para empezar.
	$count = 1;
	#while para empezar a hacer la lectura de lineas.
	while ($line = fgets ($fichero)) {
	#List para separar la ID de la TAREA que hay en nuestro fichero TXT.
	list($id,$tarea) = explode(".",$line);
			#If con la condición de que si la ID es igual a nuestro CONTADOR, sume 1 más y siga comprobando la linea .
			#empezandola de nuevo con el fseek en la linea 0 de nuestro TXT.
			if ($id == $count ){
			$count++;
			fseek($fichero,0);	
			}
		}
		#Una vez comprobadas las ID dentro del fichero, comprobara la ID del cliente con la del contador donde se haya quedado.
		if ($id1 == $count){
			$idtarea = $id1.".".$tf;
			fwrite($fichero, "$id1.");
			fwrite($fichero, "$tf".PHP_EOL);
		}
		# Si el ID no corresponde, el validador te ayudará a colocar el siguiente ID.
				else {
				echo "el id no es valido, tienes que usar el siguiente : $count";
				$id1 = $count;
				$idtarea = $id1.".".$tf;
				fwrite($fichero, "$idtarea".PHP_EOL);

			}				
	
fclose($fichero);