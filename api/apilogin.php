<?php
    include('../admin/config.php');

    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="leza1313.hopto.org"');
        header('HTTP/1.0 401 Unauthorized');
        exit;
    }else{
        $username = base64_decode($_SERVER['PHP_AUTH_USER']);
        $password = base64_decode($_SERVER['PHP_AUTH_PW']);
        
        $myusername = mysqli_real_escape_string($db,$username);
        $mypassword = mysqli_real_escape_string($db,$password);

        $sql = "SELECT id,pass FROM usuarios WHERE id = '$myusername'";

        $result = mysqli_query($db,$sql);

        $row = $result->fetch_assoc(); 

        if (password_verify($mypassword, $row['pass'])) {
            echo '¡La contraseña es válida!';
        } else {
            echo 'La contraseña no es válida.';
            header('HTTP/1.0 401 Unauthorized');
        exit;
        }
    }
?>