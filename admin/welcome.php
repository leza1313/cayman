<?php
    include('session.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>Panel Admin</title>
</head>
<body>
        <?php include('templates/navbar-admin.html');?>
    <section id="cover">
       <h1>Welcome ADMIN</h1>
       <h2><a href = "logout.php">Sign Out</a></h2>
   </section>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <?php include('templates/footer-admin.html');?>
   </body>
</html>