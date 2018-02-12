<?php
    include("session.php");
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $mynombre = mysqli_real_escape_string($db,$_POST['nombre']);
        $myfoto = mysqli_real_escape_string($db,$_POST['foto']);
        $mydescripcion = mysqli_real_escape_string($db,$_POST['descripcion']);
        
        $sql = "INSERT INTO guitarras (nombre, foto, descripcion) VALUES ('$mynombre', '$myfoto', '$mydescripcion');";
        echo $sql;
        $result = mysqli_query($db,$sql);
        
   }
?>