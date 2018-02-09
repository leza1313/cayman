<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $mynombre = mysqli_real_escape_string($db,$_POST['nombre']);
        
        $sql = "DELETE FROM guitarras WHERE nombre=$mynombre;";
        echo $sql;
        $result = mysqli_query($db,$sql);
        
   }
?>