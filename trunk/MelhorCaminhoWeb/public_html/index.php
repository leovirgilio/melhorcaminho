<?php

function Redirect($url, $permanent = false) {
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}

$login_cookie = $_COOKIE['login'];
if (isset($login_cookie)) {
    echo"Bem-Vindo, $login_cookie <br><br>";
    include 'cadastro_f.php';


} else {
 
   
    include 'login.html';
}
?>