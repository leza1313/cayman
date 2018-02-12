<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
      $sql = "SELECT id,pass FROM usuarios WHERE id = '$myusername'";

        $result = mysqli_query($db,$sql);

        $row = $result->fetch_assoc(); 
     
        if (password_verify($mypassword, $row['pass'])) {
            //echo '¡La contraseña es válida!';
            session_start();
            $_SESSION['login_user'] = $myusername;
            header("location: welcome.php");
        } else {
            //echo 'La contraseña no es válida.';
            $error = "Your Login Name or Password is invalid";
        }
}
$db->close();
?>