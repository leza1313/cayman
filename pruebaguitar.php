<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
    
    
    <link rel="stylesheet" href="/css/styleloader.css">
    <link rel="stylesheet" href="/css/stylepopup.css">
    
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/><title>Info Guitarra</title><style>
    nav{
        z-index: 1;
    }
</style>
        

</head>
    <body>
        <nav id="mynav" class="navbar navbar-expand-lg navbar-dark bg-dark">
         <!--<img src="img/logo.png" href="index.php" alt="logo" width="60" height="60">-->
          <a class="navbar-brand" href="index.php">Cayman</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="productos.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="guitarras.php">Guitarras</a>
                  <a class="dropdown-item" href="bajos.php">Bajos</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loader.php">Taller Custom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Artistas</a>
              </li>
              <!--
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              -->
            </ul>
            <ul class="nav navbar-nav ml-auto justify-content-end">
                <li class="" id="boton-contacto">
                    <a href="contacto.php" class="btn btn-info">Contacto</a>
                </li>
            </ul>
          </div>
        </nav><section id='cover'><br>        
        <br>
        <div class="container">
           <div class="row">
               <div class="col-6">
                    <!-- Carousel, adaptar tamaño imagenes -->
                    <div class="container" id="myproduct-foto">
                       <div class="foto-pal">
                           <div><img src="/img/teleca.jpeg" alt="" height="300"></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                           <div><img src="/img/teleca.jpeg" alt="" height="300"></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                       </div>
                       <div class="foto-min">
                           <div><img src="/img/teleca.jpeg" alt=""></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                           <div><img src="/img/teleca.jpeg" alt=""></div>
                           <div><img src="img/galeria-guitar.jpg" alt=""></div>
                       </div>
                    </div>
                </div>
                <div id="product-wrap" class="col">
                    <h2 class="product-nombre">mississipi</h2><hr>
                    <p class="product-descripcion">Esto es la descripción de la guitarra mississipi. Con un puente tal, pastillas cual, hecha a mano. Con un acabado por defecto en madera. Con estilo "vintage".  Prueba de añadir</p>
                </div>
            </div>
        </div>
        <br>
        
        
        
        <!-- Dinamico sin carousel
        <section id="informacion-guitarra">
            <div class="section-content">
               <div class="container">
                   <h2></h2>
                   <img src="" alt="foto" height="600">
                   <p></p>
                </div>
            </div>
        </section>
        -->
       
        <!-- Carousel, slick js, necesita jquery definido antes. -->
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
</section>
       
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<footer id="footer1">
<div class="container">
<div class="row">
    <div class="col-sm-3">
        <strong id="footer-header">Enlaces</strong><br>
        <a href="guitarras.php">Guitarras</a><br>
        <a href="bajos.php">Bajos</a><br>
        <a href="loader.php">Taller Custom</a><br>
        <a href="">Galeria</a><br>
        <a href="">Artistas</a><br>
        <a href="admin/login.php">Acceso</a><br>
    </div>
    <div class="col-sm-3">
        <strong id="footer-header">Direccion</strong><br>
        1234 Street name <br>
        Pamplona, CP 31300 <br>
    </div>
    <div class="col-sm-3">
        <strong id="footer-header">Contacto</strong><br>
        Email: xxxxxx@xxx.com <br>
        Telefono: 666 666 666 <br>
        Fax: 666 666 666 <br>
    </div>
    <div class="col-sm-3">
        <strong id="footer-header">Como llegar</strong><br>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe id="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11966.051337605408!2d-1.6410019909056268!3d42.80080512629015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5093b30d546e2d%3A0xd9a9e86617c6be7b!2sUPNA+-+Universidad+P%C3%BAblica+de+Navarra!5e0!3m2!1ses!2ses!4v1517079009713" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

</div>
</footer>
</body>
</html>