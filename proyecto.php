<!DOCTYPE html>
<html>
    <head>

<link rel="stylesheet" type="text/css" href="css.css">

    </head>
    <body>
            <h1>APLICACION</h1>
            
            
            <table border>
                <tr>
                <td>
                <?php
        
        
        $fichero = fopen("proceso.txt","rb");
        $i=1;
        
        while($proyecto=fgets($fichero)){
           

     
            list($id,$tarea,$del)=explode(".", "$proyecto");
            $id=intval($id);
            if($id==$i){
                    
                   echo "<form method='GET'
             enctype='application/x-www-urlencoded'
             action='funcion2.php'>";

              $puta_linea=$id.'.'.$tarea.'.'.$del;
              $puta_linea=trim($puta_linea);
            if($puta_linea!=$id.'.'.$tarea.'.'.'!')
             echo $id.'.'.$tarea.'<br>'."<div><label><input name='tarea[]' type='radio' value='$proyecto'></label></div>";

                    fseek($fichero,0);
                    $i++;
            }
           
            
        
        }
        echo "<div><button type='submit'>borrar tarea</button></div></form>";
        

       
        
        
        ?>
          <form method="GET"
            enctype="application/x-www-urlencoded"
            action="funcion.php">
            <div><label>Introducir Tarea:<input name="tarea"></label></div>
            <div><label>introducir id:<input type="number" min=0 name="id"></label></div>
            <div><button type="submit">Introducir</button></div>

        </form>
        </td>
        
         

        
               
                <td>
                <?php
                $fichero = fopen("tarea.txt","rb");
                $i=1;
                while ($proyecto=fgets($fichero)){
                    list($id,$tarea)=explode(".","$proyecto");
                    if($i==$id){
                            echo $id.'.'.$tarea.'<br>';
                            $i++;
                            fseek($fichero,0);
                    }
                }
                ?>
                </td>
            
        
               
                <td>
        <?php
        
        $fichero = fopen("fin.txt","rb");
        $i=1;
        while ($proyecto=fgets($fichero)){
                list($id,$tarea)=explode(".","$proyecto");
            if($i==$id){
                    echo $id.'.'.$tarea.'<br>';
                    $i++;
                    fseek($fichero,0);
            }
        
        }
        ?>
        </td>
        </tr>
        </table>
    </body>
</html>