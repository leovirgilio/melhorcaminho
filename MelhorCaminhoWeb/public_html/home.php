<?php

function Redirect($url, $permanent = false) {
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}

$login_cookie = $_COOKIE['login'];
if (isset($login_cookie)) {
    echo"Bem-Vindo, $login_cookie <br>";

    echo"Essas informaçõeses <font color='red'>PODEM</font> ser acessadas por voce";


} else {
    echo"Bem-Vindo, convidado <br>";

    echo"Essas informacoeses <font color='red'>NAO PODEM</font> ser acessadas por voce";

    echo"<br><a href='login.html'>Faça Login</a> Para ler o conte�do";
}
?>