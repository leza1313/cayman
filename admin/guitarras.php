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
    
    
    //Codigo que añade un salto de linea, enlace <a href> y concatena el contenido al enlace para pasar parametros por GET 
    var tarjeta = document.getElementById('titulo-carta');
    //Crear salto linea
    var nuevalinea = document.createElement('br');
    //Añadir salto de linea en el elemento tarjeta
    tarjeta.appendChild(nuevalinea);
    //Guardar en nombre el contenido entre las etiquetas del elemento id
    var nombre = document.getElementById('titulo-carta').childNodes[0].textContent;
    //Crear etiqueta <a>
    var aTag = document.createElement('a');
    //Cargar enlaces en href
    aTag.setAttribute('href',"guitarrasadmin.php?varname="+nombre);
    //Cargar el texto entre etiquetas
    aTag.innerHTML = "Editar guitarra";
    //Añadir la etiqueta al elemento tarjeta
    tarjeta.appendChild(aTag);
    
    
    //Añadido enlace a añadir guitarras
    var seccion = document.getElementById('productos');
    
    var aTag2 = document.createElement('a');
    aTag2.setAttribute('href','guitarrasadmin.php');
    aTag2.innerHTML = '<br>Añadir guitarra <br><br>';
    seccion.appendChild(aTag2);
    
    
</script>
<?php 
    include('templates/footer-admin.html')
?>