<?php

$login = $_POST['Login'];
$senha = md5($_POST['tSenha']);

$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');

$verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
if (mysql_num_rows($verifica)<=0){
    header("Location:http://melhorcaminho.url.ph/login.html");
    die();
}else{
    setcookie("login",$login);
    header("Location:http://melhorcaminho.url.ph/cadastro_f.php");
    $_SESSION["login"] = "logou-sistema";
}
?>
