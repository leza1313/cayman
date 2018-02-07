<?php
    include('fmontacabecera.php');
    montacabecera("Guitarras");
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
                              <?php
                                //Coger de la base de datos informacion de las guitarras
                                $var_value = 'mississipi';
                               ?>
                               <div class="card-block">
                                   <h4 class="card-title"><?php echo $var_value;?></h4>
                                   
                                   <a href="infoguitar.php?varname=<?php echo $var_value ?>"><img src="img/teleca.jpeg" alt="teleca"></a>
                                   
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