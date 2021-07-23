<?php

session_start();

    include 'connect.php';

    $cbarras = filter_input(INPUT_POST, 'cbarras', FILTER_SANITIZE_STRING);
    $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);
    
   
    $insertsql = "UPDATE `produtos` SET `ativo`=false WHERE `codigobarra`=$cbarras";



if ($conn->query($insertsql) === TRUE) {
    echo "New record created successfully;";
    header("Location: buscar.php");

  } else {

    echo "Error: " . $insertsql . "<br>" . $conn->error;
  }
  
  ?>
