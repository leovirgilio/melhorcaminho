<?php

$toNode = $_POST['toNode'];
$fromNode = $_POST['fromNode'];
$cost = $_POST['cost'];

$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');

$query_select = "SELECT nodeName FROM dijnodes WHERE nodeName = '$toNode'";

$select = mysql_query($query_select, $connect);
$array = mysql_fetch_array($select);

$logarray = $array['toNode'];

if ($toNode == "" || $toNode == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='caminho.html';</script>";
} else {
    if ($logarray == $toNode) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse login j� existe');window.location.href='caminho.html';</script>";
        die();
    } else {
        $query = "call dijaddpath_money ('$toNode','$fromNode', '$cost')";
        $insert = mysql_query($query, $connect);
        if ($insert) {
            echo"<script language='javascript' type='text/javascript'>alert('Usu�rio cadastrado com sucesso!');window.location.href='home.html'</script>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='caminho.html'</script>";
        }
    }
}
?>