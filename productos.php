<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        

        <title>Productos Cayman</title>
    </head>
    <body id="cover">
       <?php include('templates/navbar.html');?>
       <br>
       <!-- Cartas-->
            <div class="container">
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="card-group">
                              <!-- Primera carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <a href="guitarras.php"><h4 class="card-title">Guitarras</h4></a>
                                       <a href="guitarras.php"><img href="guitarras.php" src="img/guitar1.jpeg" alt="guitarra1"></a>
                                       <div class="card-block">
                                       </div>
                                   </div>
                               </div>
                               <!-- Segunda carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <a href="bajos.php"><h4 class="card-title">Bajos</h4></a>
                                       <a href="bajos.php"><img src="img/custom-guitar.jpg" alt="guitarra1"></a>
                                       <div class="card-block">
                                       </div>
                                   </div>
                               </div>
                               <!-- Tercera carta Amplis
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <h4 class="card-title">Amplificadores</h4>
                                       <img src="img/galeria-guitar.jpg" alt="guitarra1">
                                       <div class="card-block">
                                           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum, corporis saepe nobis deserunt impedit amet temporibus id.</p>
                                           <a href="" class="btn btn-primary">Ir a la Amplificadores</a>
                                       </div>
                                   </div>
                               </div>-->
                           </div>
                       </div>
                   </div>
               </div>
               <br>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php include('templates/footer.html');?>
    </body>
</html>