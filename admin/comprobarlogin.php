<?php
include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
       
      $sql = "SELECT id FROM usuarios WHERE id = '$myusername' and pass = '$mypassword'";

        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
      
        $count = mysqli_num_rows($result);
    
        if($count==1){
            session_start();
            $_SESSION['login_user'] = $myusername;
            header("location: welcome.php");
        }else {
            $error = "Your Login Name or Password is invalid";
        }
}
$db->close();
?>