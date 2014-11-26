<?php
$connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
$db = mysql_select_db('u559965827_sro');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <link href="css/home.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/home.js" type="text/javascript"></script>

        <title>Melhor Caminho</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <div id="menu">
            <ul>                

            </ul>
        </div>
        <div id="conteudo">

            <div id="form-dijresolve" class="form">
                <form method="POST" action="dijResolve_money.php">
                    <table>
                        <tr>
                            <td><label>Origem:</label></td>
                            <td><input type="text" name="fromNode" id="toNode"><br></td>
                        </tr>
                        <tr>
                            <td><label>Destino:</label></td>
                            <td> <input type="text" name="toNode" id="fromNode"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Buscar" id="cadastrar" name="cadastrar"></td>  
                        </tr>
                    </table>
                </form>
            </div>


            <div id="form-caminho" class="form">
                <form method="POST" action="caminho.php">
                    <table>
                        <tr>
                            <td><label>Origem:</label></td>
                            <td><input type="text" name="toNode" id="toNode"><br></td>
                        </tr>
                        <tr>
                            <td> <label>Destino:</label></td>
                            <td><input type="text" name="fromNode" id="fromNode"><br></td>
                        </tr>
                        <tr>
                            <td><label>Custo:</label></td>
                            <td> <input type="text" name="cost" id="cost"><br></td>
                        </tr>
                        <tr>
                            <td><label>Empresa:</label></td>
                            <td>
                                <div class="oi">
                                    <?php include 'http://melhorcaminho.url.ph/teste1.php';?>
                                </div>
                                <?php include 'teste1.php';?>
                                     
                                    
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div id="form-usuario" class="form">
                <form method="POST" action="cadastro.php">
                    <label>Login:</label><input type="text" name="login" id="login"><br>
                    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div>

            <div id="form-uf" class="form">
                <form method="POST" action="cadastro.php">
                    <label>UF</label><input type="text" name="login" id="login"><br>
                    <label>Sigla:</label><input type="password" name="senha" id="senha"><br>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div>

            <div id="form-cidade" class="form">
                <form method="POST" action="cadastro.php">
                    <label>Cidade:</label><input type="text" name="login" id="login"><br>
                    <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div>

        </div>

    </body>
</html>
