<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="leza1313.hopto.org"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texto a enviar si el usuario pulsa el botón Cancelar';
    exit;
} elseif($_SERVER['PHP_AUTH_USER']==admin && $_SERVER['php_AUTH_PW']=='1234') {
    echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Introdujo {$_SERVER['PHP_AUTH_PW']} como su contraseña.</p>";
}
?>

<form method="post" action="">
<input name="username" value=""/>
<input name="password" value=""/>
<input type="submit" value="ok">
</form>
