<?php

if(!isset($_GET["nome"]) 
|| !isset($_GET["rua"])){
    || !isset($_GET["kwh"])){

        //redirecionar o usuário para a tela index.php
        header("location: seneletro.php");
  }

  $nome = $_GET["nome"];
  $rua = $_GET["rua"];
  $kwh = $_GET["kwh"];

  if ( $kwh > 120 ){
      $valor = $kwh * 0.42;
  }
  else {
      $valor = $Kwh * 0.32;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Resultado</title>
</head>
<body>
  
  <?php
    if($valor > 120){
      echo "<h1> O $nome  passará a receber R$  <em> $salarioAtual </em></h1>";
    } 
    else{
      echo "<h1> O $nome  passará a receber R$  <em> $salarioAtual </em></h1>";
    }
  ?>
</body>
</html>