<?php //include('templates/footer-admin.html');
        include('templates/navbar-admin.html');
        //include('../guitarras.php');
        include('pruebaguitar.php');
?>

<script>
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
    
    //var numrows = <?php echo $result->num_rows; ?>;
    var numrows = 4;
    console.log(numrows);
    var tarjeta = document.getElementsByClassName('card-title');
    
    var nombre = document.getElementsByClassName('card-title');
   
    for (i = 0; i < numrows; i++) {
        console.log(i);
        console.log(tarjeta[i]);
        //Codigo que añade un salto de linea, enlace <a href> y concatena el contenido al enlace para pasar parametros por GET 
            //var tarjeta = document.getElementById('titulo-carta');
        //Crear salto linea
        var nuevalinea = document.createElement('br');
        //Añadir salto de linea en el elemento tarjeta
        tarjeta[i].appendChild(nuevalinea);
        //Guardar en nombre el contenido entre las etiquetas del elemento id
            //var nombre = document.getElementById('titulo-carta').childNodes[0].textContent;
        //Crear etiqueta <a>
        var aTag = document.createElement('a');
        
        //Cargar enlaces en href
        aTag.setAttribute('href',"guitarrasadmin.php?varname="+nombre[i].childNodes[0].textContent);
        //Cargar clase del enlace
        aTag.setAttribute('class','enlaces');
        //Cargar el texto entre etiquetas
        aTag.innerHTML = "Editar guitarra ";
        //Añadir la etiqueta al elemento tarjeta
        tarjeta[i].appendChild(aTag);

        //Añadido enlace a borrar guitarras
        var aTag3 = document.createElement('a');
        //Cargar clase del enlace
        aTag3.setAttribute('class','enlaces');
        aTag3.innerHTML = 'Borrar Guitarra ';
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