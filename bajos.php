<?php
    include('fmontacabecera.php');
    montacabecera("Bajos");
?>
        <section id="productos">
            <div class="section-content">
               <div class="container">
                   <h2>Bajos a la venta</h2>
                   <p>Aqui un catalogo de bajos que vendeis</p>
               
               
               <div class="row">
                   <div class="col-sm-12">
                       <div class="card-group">
                         
                         <!-- Hacer esto dinamico on php para cada fila de la tabla guitarras-->
                          <!-- Primera carta-->
                           <div id='bloque-carta' class="card rounded">
                              <?php
                                //Coger de la base de datos informacion de las guitarras
                                $var_value = 'BAJOS';
                               ?>
                               <div class="card-block">
                                   <h4 class="card-title"><?php echo $var_value;?></h4>
                                   
                                   <a href="infobajo.php?varname=<?php echo $var_value ?>"><img src="img/teleca.jpeg" alt="teleca"></a>
                                   
                               </div>
                           </div>
                           
                       </div>
                   </div>
               </div>
               </div>
            </div>
        </section>             
<?php include('templates/footer.html');?>