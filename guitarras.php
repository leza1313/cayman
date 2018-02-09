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
                          <!-- Primera carta
                           <div id='bloque-carta' class="card rounded">
                              <?php
                                //Coger de la base de datos informacion de las guitarras
                                //$var_value = 'mississipi';
                               ?>
                               <div class="card-block">
                                   <h4 id="titulo-carta" class="card-title"><?php //echo $var_value;?></h4>
                                   
                                   <a href="infoguitar.php?varname=<?php //echo $var_value ?>"><img src="/img/teleca.jpeg" alt="teleca"></a>
                                   
                               </div>
                           </div>-->
                           
                           
                           <?php


                                include('admin/config.php');
                                $sql = "SELECT nombre,foto FROM guitarras";
                                $result = mysqli_query($db,$sql);
                                $num_cards=0;     
                                $num_rows=0;
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo "<div id='bloque-carta' class='card rounded'>";
                                        echo "<div class='card-block'>";
                                        echo "<h4 id='titulo-carta' class='card-title'>" . $row['nombre'] . "</h4>";
                                        echo "<a href='infoguitar.php?varname=" . $row['nombre'] . "'><img src='" . $row['foto'] . "' alt='" . $row['nombre'] . "'></a>";
                                        echo "</div>";
                                        echo "</div>";
                                        $num_cards=$num_cards+1;
                                        if ($num_cards>2){
                                            echo "<div class='row'><div class='col-sm-12'><div class='card-group'>";
                                            $num_cards=0;
                                            $num_rows=$num_rows+1;
                                        }
                                    }
                                } else {
                                    echo "0 results";
                                }
                                for ($i=0;$i<$num_rows;$i++){
                                    echo "</div></div></div>";
                                }
                           ?>
                           
                       </div>
                   </div>
               </div>
               </div>
            </div>
        </section>             
<?php include('templates/footer.html');?>