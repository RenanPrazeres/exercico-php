<?php

if(!isset($_GET["nome"]) 
|| !isset($_GET["salario"])){

        //redirecionar o usuário para a tela index.php
        header("location: fulbank.php");
  }

  $nome = $_GET["nome"];
  $salario = $_GET["salario"];

if ($salario > 5000 ){
    $salarioAtual = $salario * 1.1;
}
else {
    $salarioAtual = $salario *1.2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo</title>
</head>
<body>
  
  <?php
    if($salarioAtual > 5000){
      echo "<h1> O $nome  passará a receber R$  <em> $salarioAtual </em></h1>";
    } 
    else{
      echo "<h1> O $nome  passará a receber R$  <em> $salarioAtual </em></h1>";
    }
  ?>
</body>
</html>



