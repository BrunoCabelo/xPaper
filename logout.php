<?php 
	session_start();
	session_destroy();

	unset(
	$_SESSION['usuariid'],      
	$_SESSION['usuarioemail'] , 
	$_SESSION['usuariosenha'],  
	$_SESSION['usuarionome'],   
	$_SESSION['usuario']);  

	header("Location: index.php");
 ?>