<?php
    include("config.php");
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = mysqli_real_escape_string($db,$_GET['id']);
        
        if(isset($_GET['nuevonombre'])){
            $mynombre = mysqli_real_escape_string($db,$_GET['nuevonombre']);
            
            $sql = "UPDATE guitarras SET 'nombre' = '"$mynombre" WHERE 'nombre'="$id;
            $result = mysqli_query($db,$sql);
        }elseif(isset($_GET['nuevotexto'])){
            $mytexto = mysqli_real_escape_string($db,$_GET['nuevotexto']);
            $sql = "UPDATE guitarras SET 'descripcion' = '"$mytexto" WHERE 'nombre'="$id;
            $result = mysqli_query($db,$sql);
        }
        /*
        if(isset($_GET['nuevofoto'])){
            $mynombre = mysqli_real_escape_string($db,$_GET['nuevonombre']);
            
            //$sql = "UPDATE guitarras SET 'nombre' = '"$mynombre" WHERE 'nombre'="$id;
            //echo $sql;
            //$result = mysqli_query($db,$sql);
        }
        */
        
        
        
        
   }
    //header("location:infoguitar.php");
?>