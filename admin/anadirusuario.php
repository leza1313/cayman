<?php
include('session.php');
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    
      $sql = "SELECT id FROM usuarios WHERE id = '$myusername'";

        $result = mysqli_query($db,$sql);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
        $count = mysqli_num_rows($result);
    
        if($count==1){
            echo "Ya existe un usuario con ese nombre";
        }else{
            $hash = password_hash($mypassword,PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (id, pass) VALUES ('$myusername', '$hash');";
            $result = mysqli_query($db,$sql);
            echo "Usuario creado correctamente.";
            echo "<a href='index.php'>Volver al Inicio</a>";
        }
}
$db->close();
?>