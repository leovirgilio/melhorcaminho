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

            <div id="form-empresa" class="form">
                <form method="POST" action="cad_empresa.php">
                    <table>
                        <tr>
                            <td><label>Nome:</label></td>
                            <td><input type="text" name="nome_empresa" id="toNode"><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar"></td>  
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
                        <tr class="tem-select">
                            <td>
                                <label>Empresa:</label>
                            </td>
                            <td>

                                <select name="empresa">

                                    <?php
                                    $connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
                                    $db = mysql_select_db('u559965827_sro');

                                    $sql = mysql_query("SELECT * FROM gui_tb_empresa");

                                    echo '<option value="" disabled="disabled">Selecione</option>';

                                    while ($exibe = mysql_fetch_assoc($sql)) {
                                        $value = $exibe['nome'];
                                        $id_path = $exibe['id_empresa'];
                                        echo "<option value=\"$id_path\">$value</option>";
                                    }
                                    ?>

                                </select>

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
                    <div class="quebra"><label>Login:</label><input type="text" name="login" id="login"></div>
                    <div class="quebra"><label>Senha:</label><input type="password" name="senha" id="senha"><br></div>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div>

            <div id="form-uf" class="form">
                <form method="POST" action="cadastro.php">
                    <div class="quebra"><label>UF</label><input type="text" name="login" id="login"><br></div>
                    <div class="quebra"><label>Sigla:</label><input type="password" name="senha" id="senha"><br></div>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div>

            <div id="form-cidade" class="form">
                <form method="POST" action="cadastro.php">
                    <div class="quebra"><label>Cidade:</label><input type="text" name="login" id="login"><br></div>
                    <div class="quebra"><label>Senha:</label><input type="password" name="senha" id="senha"><br></div>
                    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                </form>
            </div>

        </div>

        <style type="text/css">

            @import url(http://fonts.googleapis.com/css?family=Open+Sans);

            html{
                font-family: 'Open Sans';
            }

            .form{
                position: relative;
                float: left;
                width: 100%;
                max-width: 260px;
            }

            .form label{
                position: relative;
                float: left;
                width: 100%;
                top: 10px;
                max-width: 70px;
                font-size: 18px;
            }

            td > label{
                top: 0px !important;
            }

            td{
                height: 35px;
            }

            .form input[type="text"],.form input[type="password"]{
                position: relative;
                float: left;
                max-width: 170px;
                width: 96%;
                padding: 4px 2%;
                font-size: 18px;
                height: 30px;
            }

            .form select{
                left: 20px;
                position: relative;
            }

            td > input[type="submit"]{
                left: 0px !important;
            }

            .form input[type="submit"]{
                position: relative;
                float: left;
                width: 100%;
                max-width: 174px;
                left: 75px;
            }

            .quebra{
                position: relative;
                float: left;
                width: 100%;
                margin: 2px 0px;
            }

            .tem-select{
                height: 35px;
            }

        </style>

    </body>
</html>
