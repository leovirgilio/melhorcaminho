<?php
 
/*
 * Following code will list all the products
 */
 
// array for JSON response
$response = array();
 
// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();
 
// get all products from products table
$result = mysql_query("SELECT *FROM gui_tb_uf") or die(mysql_error());
 
// check for empty result
if (mysql_num_rows($result) > 0) {
    // looping through all results
    // products node
    $response["ufs"] = array();
 
    while ($row = mysql_fetch_array($result)) {
        // temp user array
        $uf = array();
        $uf["id_uf"] = $row["id_uf"];
        $uf["tx_nome"] = $row["tx_nome"];
        $uf["tx_sigla"] = $row["tx_sigla"];

        // push single product into final response array
        array_push($response["ufs"], $uf);
    }
    // success
    $response["success"] = 1;
 
    // echoing JSON response
    echo json_encode($response);
} else {
    // no products found
    $response["success"] = 0;
    $response["message"] = "Nenhum UF encontrado.";
 
    // echo no users JSON
    echo json_encode($response);
}
?>