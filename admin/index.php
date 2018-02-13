<?php //include('templates/footer-admin.html');

        //include("session.php");
        include('templates/navbar-admin.html');
        include('../index.php');
?>
<div id="popupeditarcarousel_bg" class="mypopup_bg">
       <div id="popupeditarcarousel_main_div" class="mypopupeditar_main_div">
           <p id="popupeditarcarousel_title" class="mypopupeditar_title">Editar:</p>
           
           <form action="editarinicio.php" method="get">
              <label for="nuevonombre">Texto</label>
               <textarea class="form-control" name="nuevotexto" id="" cols="30" rows="10" placeholder="Texto del quienes somos"></textarea>
                <input type="hidden" name="id" value="">
                <br>
                <input type="submit" class="btn btn-primary" value="Aceptar">
           </form>
           <div id="closepopupeditarcarousel" class="closemypopup" title="Cerrar" onclick="closePopUp(event,'popupeditarcarousel_bg')">
               <p id="closepopupeditarcarousel_p" class="closemypopup_p">X</p>
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
    
    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
    
    
    var quienes_somos = document.getElementById('quienes-somos');
    var nuevalinea = document.createElement('br');
    //quienes_somos.appendChild(nuevalinea);
    var aTag = document.createElement('a');
    aTag.setAttribute('onclick',"openPopUp(event,'popupeditarcarousel_bg')");
    aTag.setAttribute('class',"enlaces");
    //Cargar el texto entre etiquetas
    aTag.innerHTML = "Editar Quienes somos ";
    quienes_somos.appendChild(aTag);
    quienes_somos.appendChild(nuevalinea);
    
</script>
<?php 
    include('templates/footer-admin.html')
?>