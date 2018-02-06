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
        

        <title>Guitarras</title>
    </head>
    <body id="cover">
       <?php 
                include('templates/navbar.html');
           ?>
        <section id="productos">
            <div class="section-content">
               <div class="container">
                   <h2>Guitarras a la venta</h2>
                   <p>Aqui un catalogo de guitarras que vendeis</p>
               
               
               <div class="row">
                   <div class="col-sm-12">
                       <div class="card-group">
                         
                         <!-- Hacer esto dinamico on php para cada fila de la tabla guitarras-->
                          <!-- Primera carta-->
                           <div id='bloque-carta' class="card rounded">
                               <div class="card-block">
                                   <h4 class="card-title">Mississipi</h4>
                                   <img src="img/teleca.jpeg" alt="teleca">
                                   <div class="card-block">
                                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quam, tempore nostrum, distinctio recusandae tempora excepturi enim sequi incidunt veniam maiores quod.</p>
                                       <?php 
                                       $var_value = 'mississipi';
                                       ?>
                                       <a class="btn btn-primary" href="infoguitar.php?varname=<?php echo $var_value ?>">Ver mas</a>
                                   </div>
                               </div>
                           </div>
                           
                           
                           <!-- Segunda carta-->
                           <div id='bloque-carta' class="card rounded">
                               <div class="card-block">
                                   <h4 class="card-title">Pala</h4>
                                   <img src="img/pala.jpeg" alt="pala">
                                   <div class="card-block">
                                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea dolore blanditiis perspiciatis consequatur sed sunt quidem sequi fuga illum, laborum quo ipsa recusandae aspernatur id, maiores illo quos laudantium.</p>
                                       <a href="" class="btn btn-primary">Ver más</a>
                                   </div>
                               </div>
                           </div>
                           <!-- Tercera carta-->
                           <div id='bloque-carta' class="card rounded">
                               <div class="card-block">
                                   <h4 class="card-title">Galeria</h4>
                                   <img src="img/galeria-guitar.jpg" alt="guitarra1">
                                   <div class="card-block">
                                       <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum, corporis saepe nobis deserunt impedit amet temporibus id.</p>
                                       <a href="" class="btn btn-primary">Ir a la Galeria</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               </div>
            </div>
        </section>             
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php include('templates/footer.html');?>
    </body>
</html>