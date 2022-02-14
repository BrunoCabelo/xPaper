<?php


	/* Database connection start */
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "xPaper";
	$conn       = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: ". mysqli_connect_error());



	if (isset($_POST['status']) && isset($_POST['id']) && !empty($_POST['id'])) {
	   $status = $_POST['status'];
	   $id     = $_POST['id'];
	   
	   $sql    =  " UPDATE usuarios SET status=$status WHERE id=$id ";
	    
	   $query = mysqli_query($conn, $sql) or die();
	     
	   if(mysqli_affected_rows($conn) > 0){
	      echo "Sucesso: Atualizado corretamente!";
	   }else{
	      echo "Aviso: Não foi atualizado!";
	   }  
	}    



?>
