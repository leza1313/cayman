<?php //include('templates/footer-admin.html');
        include("session.php");
        include('templates/navbar-admin.html');
        include('../bajos.php');
?>

<script>
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
    
    var numrows = <?php echo $result->num_rows; ?>;
    //var numrows = 3;
    var tarjeta = document.getElementsByClassName('card-title');
    
    var nombre = document.getElementsByClassName('card-title');
    var nuevalinea=document.createElement('br');
    
    for (i = 0; i < numrows; i++) {
        //Añadido enlace a borrar bajos
        var aTag3 = document.createElement('a');
        //Cargar clase del enlace
        aTag3.setAttribute('class','enlaces');
        aTag3.innerHTML = 'Borrar Bajo ';
        aTag3.setAttribute('href','borrarbajo.php?varname='+nombre[i].childNodes[0].textContent);
        tarjeta[i].appendChild(aTag3);
        
    }
    //Añadido enlace a añadir bajos. Este solo se pone una vez, independientemente del numero de bajos que haya
    var seccion = document.getElementById('productos');
    //seccion.appendChild(nuevalinea);
    seccion.appendChild(document.createElement('hr'));
    var aTag2 = document.createElement('a');
    aTag2.setAttribute('href','nuevobajo.php');
    aTag2.setAttribute('class','btn btn-info');
    aTag2.innerHTML = '<br>Añadir bajo<br><br>';
    seccion.appendChild(aTag2);
    var nuevalinea2=document.createElement('br');
    seccion.appendChild(nuevalinea2);
    seccion.appendChild(nuevalinea);
    
    
    
</script>
<?php 
    include('templates/footer-admin.html')
?>