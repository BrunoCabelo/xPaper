<?php

	/* Database connection start */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "xPaper";
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());




	$sql = "SELECT email, nome, status, id FROM usuarios where status < 2";
	        


	$query = mysqli_query($conn, $sql) or die();

	$columns = array();
	while ($row = mysqli_fetch_array($query)) {  // preparing an array
	    $nestedData = array();
	    $nestedData[] = $row["id"];
	    $nestedData[] = $row["nome"];
	    $nestedData[] = $row["email"];
	    $nestedData[] = $row["status"];
	    $columns[] = $nestedData;
	}

	$json_data = array(
	    "aaData" => $columns   // total data array
	);

	header("application/json");
	echo json_encode($json_data);  // send data as json format
?>
