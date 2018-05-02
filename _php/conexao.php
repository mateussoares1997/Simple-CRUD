<?php

	//Conexão com o banco de dados:
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=teste_voxus","root","");
		$pdo -> exec("SET CHARACTER SET utf8");

		// Set error reporting:
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}

	//Código para mostrar os erros do PDO se existentes
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

?>
