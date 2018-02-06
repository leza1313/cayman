
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
        
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <title>Info guitarra</title>
    </head>
    <body id="cover">
       <?php
        include ('navbar.html');
        include ('config.php');
        $mynombre = mysqli_real_escape_string($db,$_GET['varname']);
       
        $sql = "SELECT nombre,foto,descripcion FROM guitarras WHERE nombre = '$mynombre'";

        $result = mysqli_query($db,$sql);
        
        $row = $result->fetch_assoc();    
        
        ?>
        
        <br>
        <div class="container">
           <div class="row">
               <div class="col-6">
                    <!-- Carousel, algo pasa con el carousel que en el movil deja una linea de margen a la derecha -->
                    <div class="container" id="myproduct-foto">
                       <div class="foto-pal">
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                       </div>
                       <div class="foto-min">
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
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
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
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
        <?php include('footer.html');?>
    </body>
</html>