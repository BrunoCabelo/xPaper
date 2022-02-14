<?php 
	ob_start();
	if (($_SESSION['usuariid'] == "" ) || ( $_SESSION['usuarioemail'] == "") || ($_SESSION['usuariosenha'] == "") || ( $_SESSION['usuarionome'] == "") ) {
		unset(
	          $_SESSION['usuariid'],      
	          $_SESSION['usuarioemail'] , 
	          $_SESSION['usuariosenha'],  
	          $_SESSION['usuarionome']   
	          );  
		
		//direciona para pagina de login
	   header("Location: login.php");
	}



 ?>