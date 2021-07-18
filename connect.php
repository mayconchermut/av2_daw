<?php

$name = "localhost";
$user = "root";
$pass = "";
$db = "av2daw";

$conn = new mysqli($name, $user, $pass,$db);

$insertsql = "INSERT INTO `produtos`(`nome`) VALUES ('Produto')";

echo"$insertsql";
// echo"$conn";
echo"<br> Data: $indata";


if ($conn->query($insertsql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insertsql . "<br>" . $conn->error;
  }

?>