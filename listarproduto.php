<?php
    // Pegando banco de dados 
    $mysqli = new mysqli("localhost", "root", "", "av2daw");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
 
$query = "SELECT * FROM produtos";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
    /* free result set */
    $result->close();
}

/* close connection */
$mysqli->close();
?>