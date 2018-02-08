<?php
    function montacabeceradmin($arg1){
        include('templates/header-admin.html');
        echo "<title>$arg1</title>";
        include('templates/navbar-admin.html'); 
        echo "<section id='cover'><br>";
    }
?>