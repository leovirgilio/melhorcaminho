<?php

$toNode = $_POST['toNode'];
$fromNode = $_POST['fromNode'];
$cost = $_POST['cost'];

$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');


$logarray = $array['toNode'];

if ($toNode == "" || $toNode == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo DE deve ser preenchido');window.location.href='cadastro_f.php';</script>";
} else {
    if ($logarray == $toNode) {
        echo"<script language='javascript' type='text/javascript'>alert('Erro');window.location.href='cadastro_f.php';</script>";
        die();
    } else {
        $query = "call dijaddpath_money ('$toNode','$fromNode', '$cost', '0')";
        $insert = mysql_query($query, $connect);
        echo $insert;
        echo $toNode;
        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Caminho cadastrado!');window.location.href='cadastro_f.php'</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('Nao foi cadastrar');window.location.href='cadastro_f.php'</script>";
        }
    }
}
?>