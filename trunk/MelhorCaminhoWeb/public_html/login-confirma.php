<?php

session_start();

if(isset($_SESSION['login'])){

	header("Location:http://melhorcaminho.url.ph/cadastro_f.php");

}else{
	
	header("Location:http://melhorcaminho.url.ph/login.html");

}


?>