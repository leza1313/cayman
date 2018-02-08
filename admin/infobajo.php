<?php
    
    include('templates/navbar-admin.html');


    include('../fmontacabecera.php');
    montacabecera("Info Bajo");

    include ('/admin/config.php');
    $mynombre = mysqli_real_escape_string($db,$_GET['varname']);

    $sql = "SELECT nombre,foto,descripcion FROM guitarras WHERE nombre = '$mynombre'";

    $result = mysqli_query($db,$sql);

    $row = $result->fetch_assoc();    

?>
        
        <br>
        <div class="container">
           <div class="row">
               <div class="col-6">
                    <!-- Carousel, adaptar tamaño imagenes -->
                    <div class="container" id="myproduct-foto">
                       <div class="foto-pal">
                           <div><img src="<?php echo $row['foto'];?>" alt="" height="300"></div>
                           <div><img src="img/sg-azul.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt="" height="300"></div>
                           <div><img src="img/sg-azul.jpg" alt=""></div>
                       </div>
                       <div class="foto-min">
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="img/sg-azul.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="img/sg-azul.jpg" alt=""></div>
                       </div>
                    </div>
                </div>
                <div class="col" id="product-wrap">
                    <h2><?php echo $row['nombre'];?></h2>
                    <p><?php echo $row['descripcion'];?></p>
                </div>
            </div>
        </div>
        <br>
        
        
        
        <!-- Dinamico sin carousel
        <section id="informacion-guitarra">
            <div class="section-content">
               <div class="container">
                   <h2><?php //echo $row['nombre'];?></h2>
                   <img src="<?php //echo $row['foto'];?>" alt="foto" height="600">
                   <p><?php //echo $row['descripcion'];?></p>
                </div>
            </div>
        </section>
        -->
       
        <!-- Carousel, slick js, necesita jquery definido antes.-->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script>
            $('.foto-pal').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.foto-min',
                adaptiveHeight: true
            });
            $('.foto-min').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.foto-pal',
                arrows: false,
                dots: false,
                focusOnSelect: true
            });
        </script>
<?php include('templates/footer.html');?>

<script>
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
</script>
<?php 
    include('templates/footer-admin.html')
?>




