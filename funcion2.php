<?php
$nume=$_GET["tarea"];
$j=0;
$lectura=fopen("tarea.txt","r+b");
$i=0;

for($i=0;$i<count($_GET["tarea"]);$i++){


$nume=$_GET["tarea"][$i].'<br>';
echo $nume;
list($id,$tarea,$eliminado)=explode(".",$nume);



while($linea=fgets($lectura))
{

list($id2,)=explode(".","$linea");
if($id2==$id)
{
$j++;
$k=$j-3;
fseek($lectura,$k,SEEK_CUR);
fwrite($lectura,"!");



}
    


   
}
fseek($lectura,0);
}






