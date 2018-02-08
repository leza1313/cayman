<?php
    
    include('templates/navbar-admin.html');


    include('../fmontacabecera.php');
    montacabecera("Info Bajo");

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
                    <!-- Carousel, adaptar tamaño imagenes -->
                    <div class="container" id="myproduct-foto">
                       <div class="foto-pal">
                           <div><img src="<?php echo $row['foto'];?>" alt="" height="300"></div>
                           <div><img src="/img/sg-azul.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt="" height="300"></div>
                           <div><img src="/img/sg-azul.jpg" alt=""></div>
                       </div>
                       <div class="foto-min">
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="/img/sg-azul.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="/img/sg-azul.jpg" alt=""></div>
                       </div>
                    </div>
                </div>
                <div class="col" id="product-wrap">
                    <h2 id="product-nombre"><?php echo $row['nombre'];?></h2>
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
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/slick/slick.min.js"></script>
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
<?php include('../templates/footer.html');?>

<script>
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    
    //Al ejecutar sale foot is null, por eso peta el resto del js
    var foot = document.getElementById('footer1');
    foot.remove();
    
    //Codigo que añade un salto de linea, enlace <a href> y concatena el contenido al enlace para pasar parametros por GET 
    var tarjeta = document.getElementById('product-nombre');
    //Crear salto linea
    var nuevalinea = document.createElement('br');
    //Añadir salto de linea en el elemento tarjeta
    tarjeta.appendChild(nuevalinea);
    //Guardar en nombre el contenido entre las etiquetas del elemento id
    var nombre = document.getElementById('product-nombre').childNodes[0].textContent;
    //Crear etiqueta <a>
    var aTag = document.createElement('a');
    //Cargar enlaces en href
    aTag.setAttribute('href',"bajosadmin.php?varname="+nombre);
    //Cargar el texto entre etiquetas
    aTag.innerHTML = "Editar Bajo ";
    //Añadir la etiqueta al elemento tarjeta
    tarjeta.appendChild(aTag);
    
    //Añadido enlace a añadir guitarras
    var seccion = document.getElementById('productos');
    
    var aTag2 = document.createElement('a');
    aTag2.setAttribute('href','bajosadmin.php');
    aTag2.innerHTML = 'Añadir Bajo';
    tarjeta.appendChild(aTag2);
    
        
    
    
    
</script>
<?php 
    include('templates/footer-admin.html')
?>




