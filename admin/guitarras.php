<?php //include('templates/footer-admin.html');
        include('templates/navbar-admin.html');
        include('../guitarras.php');
?>

<script>
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
    
    var numrows = <?php echo $result->num_rows; ?>;

    var tarjeta = document.getElementsByClassName('card-title');
    var nuevalinea = document.createElement('br');
    var $element = $(".card-title");
    console.log($element);
    var nombre = document.getElementsByClassName('card-title').childNodes[0].textContent;
    
    var aTag = document.createElement('a');
    aTag.innerHTML = "Editar guitarra ";
    var aTag3 = document.createElement('a');
    aTag3.innerHTML = 'Borrar Guitarra ';

    
    for (i = 0; i < numrows; i++) {

        //Codigo que añade un salto de linea, enlace <a href> y concatena el contenido al enlace para pasar parametros por GET 
            //var tarjeta = document.getElementById('titulo-carta');
        //Crear salto linea
        //Añadir salto de linea en el elemento tarjeta
        tarjeta[i].appendChild(nuevalinea);
        //Guardar en nombre el contenido entre las etiquetas del elemento id
            //var nombre = document.getElementById('titulo-carta').childNodes[0].textContent;
        //Crear etiqueta <a>
        //Cargar enlaces en href
        aTag.setAttribute('href',"guitarrasadmin.php?varname="+nombre[i]);
        //Cargar el texto entre etiquetas
        //Añadir la etiqueta al elemento tarjeta
        tarjeta[i].appendChild(aTag);

        //Añadido enlace a borrar guitarras
        aTag3.setAttribute('href','guitarrasadmin.php?varname='+nombre[i]);
        tarjeta[i].appendChild(aTag3);
        
    }
    //Añadido enlace a añadir guitarras. Este solo se pone una vez, independientemente del numero de guitarras que haya
    var seccion = document.getElementById('productos');

    var aTag2 = document.createElement('a');
    aTag2.setAttribute('href','guitarrasadmin.php');
    aTag2.innerHTML = '<br>Añadir guitarra <br><br>';
    seccion.appendChild(aTag2);
    
    
</script>
<?php 
    include('templates/footer-admin.html')
?>