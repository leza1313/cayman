<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $mynombre = mysqli_real_escape_string($db,$_GET['nombre']);
        
        $sql = "DELETE FROM guitarras WHERE varname=$mynombre;";
        echo $sql;
        $result = mysqli_query($db,$sql);
        
   }
    //header("location:guitarras.php")
?>