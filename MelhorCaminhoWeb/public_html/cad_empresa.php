<?php

$nome_empresa = $_POST['nome_empresa'];

$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');

$query_select = "INSERT INTO gui_tb_empresa (id_empresa,nome) values ('default','$nome_empresa')";

$select = mysql_query($query_select, $connect);

if($select){

    print "<script>alert('cadastrado com sucesso'); window.location.href = '/cadastro_f.php'</script>";

}else{

    print "<script>alert('error no sucesso'); window.location.href = '/cadastro_f.php'</script>";

}

?>