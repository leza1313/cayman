<?php //include('templates/footer-admin.html');
        include('../bajos.php');
?>

<script>

    var fondo = document.getElementById('cover');
    fondo.id='cover-admin';
    var nav = document.getElementById('mynav');
    nav.remove();
    var foot = document.getElementById('footer1');
    foot.remove();
</script>
<?php 
    include('templates/navbar-admin.html');
    include('templates/footer-admin.html')
?>