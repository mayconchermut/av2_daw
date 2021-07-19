<?php
session_start();

    include 'connect.php';

    
    $nome = filter_input(INPUT_POST, 'pname', FILTER_SANITIZE_STRING);
    $cbarras = filter_input(INPUT_POST, 'cbarras', FILTER_SANITIZE_STRING);
    $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    $tipoprod = filter_input(INPUT_POST, 'tipoprod', FILTER_SANITIZE_STRING);
    $precovenda = filter_input(INPUT_POST, 'precovenda', FILTER_SANITIZE_STRING);
    $qntdprod = filter_input(INPUT_POST, 'qntdprod', FILTER_SANITIZE_STRING);
    $pesog = filter_input(INPUT_POST, 'pesog', FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    $urlimg = filter_input(INPUT_POST, 'urlimg', FILTER_SANITIZE_STRING);
    $indata = filter_input(INPUT_POST, 'indata', FILTER_SANITIZE_STRING);
    $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);
    
    if($situacao == "ativo"){
        $situacao = true;
    }else{
        $situacao = false;
    }
   
    $insertsql = "INSERT INTO `produtos`(`nome`, `codigobarra`, `fabricante`, `categoria`, `tipoprod`, `preco`, `quantidade`, `peso`, `descricao`, `linkimg`, `data`, `ativo`) 
    VALUES ('$nome',$cbarras,'$fabricante','$categoria','$tipoprod',$precovenda,$qntdprod,$pesog,'$desc','$urlimg','$indata',$situacao)";

    // $insertsql = "INSERT INTO `produtos`(`nome`) VALUES ('$nome')";

echo"$insertsql";
// echo"$conn";
echo"<br> Data: $indata";


if ($conn->query($insertsql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insertsql . "<br>" . $conn->error;
  }
 
  ?>
