<?php

	// Mensagens de Erro
	$msg[0] = "Conexão com o banco de dados falhou!";
	$msg[1] = "Não foi possível selecionar o banco de dados!";

	$email       = $_POST["email"];
	$senha_atual = $_POST["senha_atual"];
	$nova_senha  = $_POST["nova_senha"];
	$nome        = $_POST["nome"];



	// Fazendo conexão com o servidor MySQL
	$conexao = include_once("conection.php"); 

	// Selecionando o banco de dados
	mysqli_select_db("xpaper") or die($msg[1]);

	 
	 $sql = mysql_query("Select * From usuarios Where id = 1");
	while($exibe = mysql_fetch_assoc($sql)){
	  $senha = $exibe['senha'];
	  $id    = $exibe['id'];
	}

	if ($senha_atual == $senha) {

	$up = mysql_query("UPDATE usuarios SET email='$email', nome='$nome', senha='$nova_senha' WHERE id=$id");
	 
		if(mysql_affected_rows() > 0){
		  
		  $_SESSION['usuariid']      = $exibe['id'];
	      $_SESSION['usuarioemail']  = $exibe['email'];
	      $_SESSION['usuariosenha']  = $exibe['senha'];
	      $_SESSION['usuarionome']   = $exibe['nome'];
	      echo "1";
		}else{
		  echo "2" ;
		}
	}
	else{
		echo "3";
	}
	                      
?>

