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
        

        <title>Bajos Admin</title>
    </head>
    <body id="cover">
        <?php 
        include('session.php');
        include('templates/navbar-admin.html');
        ?>

        <br>
        <div align = "center" >
         <div style = "width:600px; border: solid 1px #333333; background-color: #666 " align = "left">
            <div style = "background-color:#444; color:#FFFFFF; padding:3px;"><b>Añadir BAJO</b></div>
				
            <div style = "margin:30px">
               
               <form action = "test.php" method = "post" bg: #fff>
                  <label>Nombre       :</label><input type = "text" name = "nombre" class = "box"/><br /><br />
                  <label>Foto         :</label><input type = "text" name = "foto" class = "box" /><br/><br />
                  <label>Descripcion  :</label><input type = "text" name = "descripcion" class = "box" /><br/><br />
                  <input type = "submit" value = " Añadir "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
               
               </div>
					
            </div>
				
         </div>
			
      </div>
       
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <?php include('../templates/footer.html');?>
    </body>
</html>