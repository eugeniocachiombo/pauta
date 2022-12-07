<?php

	function getConexao(){
		
	/*
		try {

		$pdo = new PDO("sqlite:../BD2.db");

		return $pdo;

		} catch (Exception $e) {
		
		echo "Erro de conexao: ".$e->getMessage();
		}*/


		$host = "mysql:host=localhost;dbname=escola;charset=utf8";
		$user = "root";
		$senha = "";
	
		try {

		$pdo = new PDO($host, $user, $senha);

		return $pdo;

		} catch (Exception $e) {
		
		echo "Erro de conexao: ".$e->getMessage();
		}

		
		


}
?>