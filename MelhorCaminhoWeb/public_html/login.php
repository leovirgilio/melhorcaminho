<?php

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');
if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if (mysql_num_rows($verifica) <= 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
    } else {
    	
    Redirect('http://melhorcaminho.url.ph/home.html', false);
        setcookie("login", $login);
         echo"<script language='javascript' type='text/javascript'>alert('Login ahdshdae/ou senha incorretos');window.location.href='login.html';</script>";
       
    }
}

function Redirect($url, $permanent = false) {
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
}
?>