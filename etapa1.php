<?php
$fichero= fopen("Pendientes.txt", "rb");
$contador = 1;
while ($line = fgets($fichero)) {
		list($id,$tarea) = explode(".", $line);
		if ($id == contador ) {
				$contador++;
				fseek($fichero,0);
		}