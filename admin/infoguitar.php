<?php
    include('templates/navbar-admin.html');
    
    include('../fmontacabecera.php');
    montacabecera("Info Guitarra");

    include ('config.php');
    $mynombre = mysqli_real_escape_string($db,$_GET['varname']);

    $sql = "SELECT nombre,foto,descripcion FROM guitarras WHERE nombre = '$mynombre'";

    $result = mysqli_query($db,$sql);

    $row = $result->fetch_assoc();
    
    //$mynombre = $_GET['varname'];
?>
    <div id="popupeditarnombre_bg" class="mypopup_bg">
       <div id="popupeditarnombre_main_div" class="mypopupeditar_main_div">
           <p id="popupeditarnombre_title" class="mypopupeditar_title">Editar:</p>
           
           <form action="editarguitarra.php" method="get">
              <label for="nuevonombre">Nombre</label>
                <input type="text" class="form-control" name="nuevonombre"  placeholder="<?php echo $mynombre;?>">
                <input type="hidden" name="id" value="<?php echo $mynombre;?>">
                <br>
                <input type="submit" class="btn btn-primary" value="Aceptar">
           </form>
           <div id="closepopupeditarnombre" class="closemypopup" title="Cerrar" onclick="closePopUp(event,'popupeditarnombre_bg')">
               <p id="closepopupeditarnombre_p" class="closemypopup_p">X</p>
           </div>
       </div>
    </div>
    <!-- PopUp con textarea para poder poner parrafos-->
    <div id="popupeditartexto_bg" class="mypopup_bg">
       <div id="popupeditartexto_main_div" class="mypopupeditar_main_div">
           <p id="popupeditartexto_title" class="mypopupeditar_title">Editar:</p>
           
           <form action="editarguitarra.php" method="get">
              <label for="nuevonombre">Texto</label>
               <textarea class="form-control" name="nuevotexto" id="" cols="30" rows="10" placeholder="<?php echo $mynombre;?>"></textarea>
                <input type="hidden" name="id" value="<?php echo $mynombre;?>">
                <br>
                <input type="submit" class="btn btn-primary" value="Aceptar">
           </form>
           <div id="closepopupeditartexto" class="closemypopup" title="Cerrar" onclick="closePopUp(event,'popupeditartexto_bg')">
               <p id="closepopupeditartexto_p" class="closemypopup_p">X</p>
           </div>
       </div>
    </div>
    <script>
    function openPopUp(event,popupid){
        var mypopup = document.getElementById(popupid);
        event.preventDefault();
        mypopup.style.display = "block";
    }
    function closePopUp(event,popupid){
        var mypopup = document.getElementById(popupid);
        event.preventDefault();
        mypopup.style.display = "none";
    }
    </script>
        
        <br>
        <div class="container">
           <div class="row">
               <div class="col-6">
                    <!-- Carousel, adaptar tamaño imagenes -->
                    <div class="container" id="myproduct-foto">
                       <div class="foto-pal">
                           <div><img src="<?php echo $row['foto'];?>" alt="" height="300"></div>
                           <div><img src="/img/galeria-guitar.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt="" height="300"></div>
                           <div><img src="/img/galeria-guitar.jpg" alt=""></div>
                       </div>
                       <div class="foto-min">
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="/img/galeria-guitar.jpg" alt=""></div>
                           <div><img src="<?php echo $row['foto'];?>" alt=""></div>
                           <div><img src="/img/galeria-guitar.jpg" alt=""></div>
                       </div>
                    </div>
                </div>
                <div class="col" id="product-wrap">
                    <h2 id="product-nombre"><?php //echo $row['nombre'];?>nombrea</h2>
                    <p><?php //echo $row['descripcion'];?>Descripciona</p>
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
       
        <!-- Carousel, slick js, necesita jquery definido antes. -->
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
    var foot = document.getElementById('footer1');
    foot.remove();
    
    
    
    //Codigo que añade un salto de linea, enlace <a href> y concatena el contenido al enlace para pasar parametros por GET 
    var tarjeta = document.getElementById('product-nombre');
    //Crear salto linea
    //var nuevalinea = document.createElement('br');
    //Añadir salto de linea en el elemento tarjeta
    //tarjeta.appendChild(nuevalinea);
    //Guardar en nombre el contenido entre las etiquetas del elemento id
    var nombre = document.getElementById('product-nombre').childNodes[0].textContent;
    //Crear etiqueta <a>
    var aTag = document.createElement('a');
    //Cargar enlaces en href
    aTag.setAttribute('href','');
    aTag.setAttribute('onclick',"openPopUp(event,'popupeditarnombre_bg')");
    aTag.setAttribute('class',"enlaces");
    //Cargar el texto entre etiquetas
    aTag.innerHTML = "<br>Editar Nombre ";
    //Añadir la etiqueta al elemento tarjeta
    tarjeta.appendChild(aTag);
    
    
    var aTag2 = document.createElement('a');
    //Cargar enlaces en href
    aTag2.setAttribute('href','');
    aTag2.setAttribute('onclick',"openPopUp(event,'popupeditartexto_bg')");
    aTag2.setAttribute('class',"enlaces");
    //Cargar el texto entre etiquetas
    aTag2.innerHTML = "<br>Editar Texto ";
    //Añadir la etiqueta al elemento tarjeta
    tarjeta.appendChild(aTag2);
    
    
    
    
    
</script>
<?php 
    include('templates/footer-admin.html')
?>