	
<?php

	$hostname_parameter = "localhost";
	$database_parameter = "xPaper";
	$username_parameter = "root";
	$password_parameter = "";
	
//------------------------------------------------------------------------------------
//Conecta e seleciona o DB
	$con = mysqli_connect($hostname_parameter, $username_parameter, $password_parameter)
			or die('Could not connect to MySQL: ' . mysql_error());
	
	$db_selected = mysqli_select_db($con, $database_parameter )
			or die(" Error : " . mysql_error());
//------------------------------------------------------------------------------------
	


	
?>