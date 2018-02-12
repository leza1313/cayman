<?php
    include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/style.css">
        

        <title>Crear Cuenta</title>
    </head>
    <body id="cover">
        <br>
        <a href="../index.php" class="btn btn-info">INICIO</a>
        <br>
        <br>
        <div align = "center" >
         <div style = "width:300px; border: solid 1px #333333; background-color: #666 " align = "left">
            <div style = "background-color:#444; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "anadirusuario.php" method = "post" bg: #fff>
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>	
            </div>
         </div>
      </div>
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src=".../js/bootstrap.min.js"></script>
    </body>
</html>