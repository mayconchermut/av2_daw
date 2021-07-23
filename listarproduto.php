<?php

    $mysqli = new mysqli("localhost", "root", "", "av2daw");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
$query = "SELECT * FROM produtos";

if ($result = $mysqli->query($query)) {


    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);

    $result->close();
}


$mysqli->close();
?>