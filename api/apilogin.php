<?php
    //include('../admin/config.php');
    //$_SERVER=null;
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        $realm = mt_rand( 1, 1000000000 );
        header('WWW-Authenticate: Basic realm='.$realm);
        header('HTTP/1.0 401 Unauthorized');
        exit;
    }else{
        
        /*$myusername = mysqli_real_escape_string($db,$_SERVER['PHP_AUTH_USER']);
        $mypassword = mysqli_real_escape_string($db,$_SERVER['PHP_AUTH_PW']);

        $sql = "SELECT id,pass FROM usuarios WHERE id = '$myusername'";

        $result = mysqli_query($db,$sql);

        $row = $result->fetch_assoc(); 

        if (password_verify($mypassword, $row['pass'])) {
            echo '¡La contraseña es válida!';
        } else {
            echo 'La contraseña no es válida.';
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }*/
        if($_SERVER['PHP_AUTH_USER']=='david' && $_SERVER['PHP_AUTH_PW']=='1234'){
            //echo "Contraseña valida!";
            $_SERVER=null;
        }else{
            $_SERVER=null;
            echo 'La contraseña no es válida.';
            $realm = mt_rand( 1, 1000000000 );
            header( 'WWW-Authenticate: Basic realm='.$realm );
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }
    }
?>