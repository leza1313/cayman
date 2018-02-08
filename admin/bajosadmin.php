<?php 
    //include('session.php');
    include('fmontacabeceradmin.php');
    montacabeceradmin("Añadir Bajo ");
?>

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
      <br>
       
<?php include('templates/footer-admin.html');?>