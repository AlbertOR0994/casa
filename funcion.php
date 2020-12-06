<?php
    
    
   
    
    $id=$_GET["id"];
    $var=$_GET["tarea"];
    $fichero1=fopen("tarea.txt","rb");
    $fichero2=fopen("tarea.txt","ab");
    while($lectura=fgets($fichero1)){
        list ($id2, $tarea2)=explode (".", "$lectura");
        if($id==$id2){
        echo "ERROR, escribe de nuevo";
        }      
    }
    if($id==null){
        $id2++;
        $c=$id2.'.'.$var.'.'."";
        fwrite ($fichero2,"$c".PHP_EOL);
        echo $c;
    }
    $id3=$id2+1;
    if($id==$id3){
        
        $c2=$id3.'.'.$var.'.'."";
        fwrite ($fichero2,"$c2".PHP_EOL);
        echo $c2;
    }
    if($id>$id3){
        echo "El numero esta por encima";
    }
    
    fclose($fichero1);
    fclose($fichero2);

