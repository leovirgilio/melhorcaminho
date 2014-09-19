<?php
 
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['tx_nome']) &&
    isset($_POST['tx_sigla'])) {
 
    $tx_nome = $_POST['tx_nome'];
    $tx_sigla = $_POST['tx_sigla'];
 
    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();
 
    // mysql inserting a new row
    $result = mysql_query("INSERT INTO gui_tb_uf(tx_nome, tx_sigla) VALUES('$tx_nome', '$tx_sigla')");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "UF cadastrado com sucesso.";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! Ocorreu algum erro.";
 
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Por favor, preencha todos os campos.";
 
    // echoing JSON response
    echo json_encode($response);
}
?>