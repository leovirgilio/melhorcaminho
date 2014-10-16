<?php

	/*
	 * Classe para conectar com o banco de dados
	 */

	class DB_CONNECT{

		//construtor
		function __construct(){
		
			//conectando com o BD
			$this->connect();
		}

		//destrutor
		function __destruct(){

			//fechando a conexão com o banco
			$this->close();
		}

		/*
		 * Função para conectar com o BD
		 */
		function connect(){
			//variaveis importante para conexão com o BD
			require_once __DIR__ . '/db_config.php';

			//conectando no mysql
			$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

			//selecionando o BD
			$db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

			//retornando a conexão
			return $con;
		}

		/*
		 * Função para fechar a conexão
		 */

		function close(){
			mysql_close();
		}

	}