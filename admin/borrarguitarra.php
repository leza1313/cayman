<?php
    include("config.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $mynombre = mysqli_real_escape_string($db,$_GET['varname']);
        
        $sql = "DELETE FROM guitarras WHERE nombre='$mynombre';";
        echo $sql;
        $result = mysqli_query($db,$sql);
        
   }
    header("location:guitarras.php");
?>