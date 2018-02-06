<?php
    function montacabecera($arg1){
        include('templates/header.html');
        echo "<title>$arg1</title>";
        include('templates/navbar.html'); 
        echo "<section id='cover'><br>";
    }
?>