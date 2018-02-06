<form method="post" action="">
<input name="username" value=""/>
<input name="password" value=""/>
<input type="submit" value="ok">
</form>

<?php
if ($_POST['username']=='admin' && $_POST['password']=='admin'){
    session_start();
    $_SESSION['login_user']='admin';
}else{
    echo 'ACCESO DENEGADO';
}
?>