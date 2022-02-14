<?php

	// Mensagens de Erro
	$msg[0] = "Conexão com o banco de dados falhou!";
	$msg[1] = "Não foi possível selecionar o banco de dados!";
	$msg[2] = "Email ja cadastrado";

	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$nome = $_POST["nome"];

	//Fazendo conexão com o servidor MySQL
	$conn = include_once("conection.php"); 

	// Selecionando o banco de dados
	mysql_select_db("xpaper") or die($msg[1]);

	// Inserindo dados
	$sql = " SELECT email FROM usuarios WHERE email ='$email' ";
	$res = mysqli_query($sql) or die(mysqli_error());

	if(mysqli_num_rows($res)>0) {
		die("1");
	}else{

		$query = "INSERT INTO usuarios VALUES(0, '$email', '$senha', '$nome', 0);";	
		$resultado = mysqli_query($query)or die("Erro ao inseris no banco".mysqli_error());	

	}

?>	
