<?php
    include('fmontacabecera.php');
    montacabecera("Productos");
?>
       <!-- Cartas-->
            <div class="container">
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="card-group">
                              <!-- Primera carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <h4 class="card-title">Guitarras</h4>
                                       <a href="guitarras.php"><img href="guitarras.php" src="/img/guitar1.jpeg" alt="guitarra1"></a>
                                   </div>
                               </div>
                               <!-- Segunda carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <h4 class="card-title">Bajos</h4>
                                       <a href="bajos.php"><img src="/img/custom-guitar.jpg" alt="guitarra1"></a>
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
               
<?php include('templates/footer.html');?>