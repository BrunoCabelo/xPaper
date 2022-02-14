<?php

    /* Database connection start */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "xPaper";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

    //Quando não seleciona a data então busca os últimos 2 anos
    $start = date('Y-m-d H:i:s', strtotime('-22 year'));
    $end = date('Y-m-d H:i:s');

    if (isset($_POST["inicio"]) && !empty($_POST["inicio"]) && isset($_POST["fim"]) && !empty($_POST["fim"])) {
        $start = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $_POST["inicio"])));
        $end = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $_POST["fim"])));
    }

    $sql = "SELECT b.inicio, b.fim, b.total, b.velocidade, b.turno, l.local FROM bobinas b "
            . "INNER JOIN locais l ON b.local  = l.id"
            . " and 1 = 1 ";

    $sql .= " and b.inicio between '$start' AND '$end'";

    //Seleciona a máquina
    if (isset($_POST["local"]) && !empty($_POST["local"])) {
        $local = $_POST["local"];

        if ($local > 0) {
            $sql .= " and b.local = $local";
        }
    }

    $query = mysqli_query($conn, $sql) or die();

    $columns = array();
    while ($row = mysqli_fetch_array($query)) {  // preparing an array
        $nestedData = array();
        $nestedData[] = date('d/m/y H:i', strtotime($row["inicio"]));
        //$nestedData[] = $row["inicio"];
        $nestedData[] = date('d/m/y H:i', strtotime($row["fim"]));
        //$nestedData[] = $row["fim"];
        $nestedData[] = $row["total"];
        $nestedData[] = $row["velocidade"];
        $nestedData[] = $row["turno"];
        $nestedData[] = $row["local"];

        $columns[] = $nestedData;
    }

    $json_data = array(
        "aaData" => $columns   // total data array
    );

    header("application/json");
    echo json_encode($json_data);  // send data as json format
?>
