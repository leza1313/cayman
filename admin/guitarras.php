<?php 
        include('session.php');
        include('templates/navbar-admin.html');
        include('../guitarras.php');
        //include('pruebaguitar.php');
?>

<script>
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
    
    //var numrows = <?php //echo $result->num_rows; ?>;
    var numrows = 4;
    var tarjeta = document.getElementsByClassName('card-title');
    
    var nombre = document.getElementsByClassName('card-title');
   
    for (i = 0; i < numrows; i++) {
        var nuevalinea = document.createElement('br');
        tarjeta[i].appendChild(nuevalinea);

        //Añadido enlace a borrar guitarras
        var aTag3 = document.createElement('a');
        //Cargar clase del enlace
        aTag3.setAttribute('class','enlaces');
        aTag3.innerHTML = 'Borrar Guitarra ';
        aTag3.setAttribute('href','borrarguitarra.php?varname='+nombre[i].childNodes[0].textContent);
        tarjeta[i].appendChild(aTag3);
        
    }
    //Añadido enlace a añadir guitarras. Este solo se pone una vez, independientemente del numero de guitarras que haya
    var seccion = document.getElementById('productos');
    seccion.appendChild(nuevalinea);
    var aTag2 = document.createElement('a');
    aTag2.setAttribute('href','nuevaguitarra.php');
    aTag2.setAttribute('class','btn btn-info');
    aTag2.innerHTML = '<br>Añadir guitarra <br><br>';
    seccion.appendChild(aTag2);
    
    
</script>
<?php 
    include('templates/footer-admin.html')
?>