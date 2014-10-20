<?php


$fromNode = $_POST['fromNode'];
$toNode = $_POST['toNode'];

$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');

$logarray = $array['toNode'];

if ($fromNode == "" || $toNode == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='caminho.html';</script>";
} else {
    if ($logarray == $toNode) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse login j� existe');window.location.href='caminho.html';</script>";
        die();
    } else {
        $query = "call dijResolve_money('$fromNode','$toNode')";
        $result = mysql_query($query, $connect);
        if ($result) {
            echo "O caminho mais barato para chegar em ".strtoupper($toNode)." saindo de ".strtoupper($fromNode).":";
            echo "<table>";
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>
                        <td>"
                            .$row['FromNodeName'].
                        "</td>
                        <td>"
                            .$row['ToNodeName'].
                        "</td>
                        <td>"
                            .$row['Cost'].
                        "</td>
                    </tr>";
                echo "<br />";
        
                }
                echo "</table>";
        } else {
            echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='caminho.html'</script>";
        }
    }
}
?>