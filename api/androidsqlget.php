<?php
   include("config.php");
   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   minombre = $_GET['nombre'];
   $result = mysqli_query($con,"SELECT * FROM guitarras where nombre='$minombre'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];

   if($data){
      echo $data;
   }
   mysqli_close($con);
?>