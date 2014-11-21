<?php


$fromNode = $_POST['fromNode'];
$toNode = $_POST['toNode'];

$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');

// array for JSON response
$response = array();

$query = "call dijResolve_money('$fromNode','$toNode')";
$result = mysql_query($query, $connect) or die(mysql_error());

echo $fromNode;
echo $toNode;

if($fromNode != "" or $toNode != ""){

     if (mysql_num_rows($result) > 0) {

        $response["dijresolves"] = array();
        
        while ($row = mysql_fetch_array($result)) {
            
            $dijresolve = array();
            $dijresolve["FromNodeName"] = $row["FromNodeName"];
			echo $row["FromNodeName"]; 	
            $dijresolve["ToNodeName"] = $row["ToNodeName"];
            $dijresolve["Cost"] = $row["Cost"];
           array_push($response["dijresolves"], $dijresolve);
        }

        $response["success"] = 1;
    
     
        echo json_encode($response);

    } else {
            // no product found
            $response["success"] = 0;
            $response["message"] = "Caminho nao encontrado.";
 
            // echo no users JSON
            echo json_encode($response);
    }
} else {
	 // no product found
            $response["success"] = 0;
            $response["message"] = "Origem ou destino sem valor.";
 
            // echo no users JSON
            echo json_encode($response);
}
?>