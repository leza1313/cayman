<?php
    include('session.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">

<title>Panel Admin</title>
<style>
			body {margin: 0;}
			canvas {width: 90%; height: 90%;}
		</style>
</head>
<body id="cover">
        <?php include('navbar-admin.html');?>
    <section>
       <h1>Welcome ADMIN<?php echo $login_session; ?></h1>
       <h2><a href = "logout.php">Sign Out</a></h2>
   </section>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include('footer.html');?>
   </body>
</html>