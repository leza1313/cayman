<?php 
    include('fmontacabecera.php');
    montacabecera('Inicio');
?>
           
            <section>
                   <div id="quienes-somos" class="container">
                       <h2>Quienes somos</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati facere vitae quo itaque ad iusto atque sequi laborum, iste. Numquam consectetur maxime tempora repellendus natus praesentium aut, quae minima veritatis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quasi numquam rem molestiae unde quis pariatur in ipsam sint molestias dolore saepe delectus, ex, nulla aliquid atque a perferendis assumenda? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloribus alias amet, quas consequatur facere nisi, perspiciatis, minima non eos, illo libero. Aliquam, adipisci, beatae. Fugiat nulla debitis, non incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati facere vitae quo itaque ad iusto atque sequi laborum, iste. Numquam consectetur maxime tempora repellendus natus praesentium aut, quae minima veritatis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quasi numquam rem molestiae unde quis pariatur in ipsam sint molestias dolore saepe delectus, ex, nulla aliquid atque a perferendis assumenda? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo doloribus alias amet, quas consequatur facere nisi, perspiciatis, minima non eos, illo libero. Aliquam, adipisci, beatae. Fugiat nulla debitis, non incidunt.</p>
                    </div>
            </section>
            <!-- Carousel-->
            <div class="container" dir="ltr" id="mycarousel-wrap">
               <div class="mycarousel">
                   <div><img src="/img/banco.jpeg" alt=""></div>

                   <div><img src="/img/galeria-guitar.jpg" alt=""></div>

                   <div><img src="/img/banco.jpeg" alt=""></div>

                   <div><img src="/img/galeria-guitar.jpg" alt=""></div>

               </div>
            </div>
            <!-- El slick js (para carousel), necesita jquery definido antes.-->
            <script src="/js/jquery-3.2.1.min.js"></script>
            <script src="/slick/slick.min.js"></script>
            <script>
                $(".mycarousel").slick({
                    rtl:false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: '20%',
                    focusOnSelect:true,
                    autoplay:true,
                    pauseOnFocus:false,
                });
            </script>
            <br>
            <!-- Cartas-->
            <div class="container">
                   <div class="row">
                       <div class="col-sm-12">
                           <div class="card-group">
                              <!-- Primera carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <h4 class="card-title">Productos</h4>
                                       <a href="productos.php"><img src="/img/guitar1.jpeg" alt="guitarra1"></a>
                                       <div class="card-block">
                                           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quam, tempore nostrum, distinctio recusandae tempora excepturi enim sequi incidunt veniam maiores quod.</p>
                                           <a href="productos.php" class="btn btn-primary">Ir a Productos</a>
                                       </div>
                                   </div>
                               </div>
                               <!-- Segunda carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <h4 class="card-title">Taller</h4>
                                       <a href="loader.php"><img src="/img/custom-guitar.jpg" alt="guitarra1"></a>
                                       <div class="card-block">
                                           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ea dolore blanditiis perspiciatis consequatur sed sunt quidem sequi fuga illum, laborum quo ipsa recusandae aspernatur id, maiores illo quos laudantium.</p>
                                           <a href="loader.php" class="btn btn-primary">Ir al Taller Custom</a>
                                       </div>
                                   </div>
                               </div>
                               <!-- Tercera carta-->
                               <div id='bloque-carta' class="card rounded">
                                   <div class="card-block">
                                       <h4 class="card-title">Galeria</h4>
                                       <a href=""><img src="/img/galeria-guitar.jpg" alt="guitarra1"></a>
                                       <div class="card-block">
                                           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nostrum, corporis saepe nobis deserunt impedit amet temporibus id.</p>
                                           <a href="" class="btn btn-primary">Ir a la Galeria</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <br>
               </div>
    <?php include('templates/footer.html');?>