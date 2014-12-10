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

        <link href="css/comum.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <title>Melhor Caminho</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <nav id="menu">
            <ul>
                <li>
                    <a href="caminhos.php" class="menubk" id="menudijpath">
                        CAMINHOS
                    </a>
                </li>
                <li>
                    <a href="pontos.php" class="menubk" id="menudijnode">
                        PONTOS
                    </a>
                </li>
<!--                 <li>
                    <a href="cidades.php" class="menubk" id="menucidade">
                        CIDADE
                    </a>
                </li> -->
                <li>
                    <a href="uf.php" class="menubk" id="menuuf">
                        UF
                    </a>
                </li>
                 <li>
                    <a href="empresas.php" class="menubk" id="menuempresa">
                        EMPRESA
                    </a>
                </li>
                <li>
                    <a href="veiculos.php" class="menubk" id="menuveiculo">
                        VEÍCULO
                    </a>
                </li>
                <li>
                    <a href="marcas.php" class="menubk" id="menumarca">
                        MARCA
                    </a>
                </li>
                <li>
                    <a href="tipos.php" class="menubk" id="menutipo">
                        TIPO
                    </a>
                </li>
                <li>
                    <a href="usuarios.php" class="menubk" id="menuusuario">
                        USUÁRIO
                    </a>
                </li>
            </ul>
        </nav>


    </body>
</html>
