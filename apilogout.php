<form method="post" action="">
<input type="submit" value="logout">
</form>
<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: apilogin.php");
   }
?>