<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $Ano=2008;
  $Idade=2022 - $Ano;
  echo "A pessoa tem $Idade anos e nasceu em $Ano";
  $voto=($Idade>=18 && $Idade <=65)?"Obrigatório":"Não Obrigatório";
  echo " <br/> Seu voto é $voto";
  ?>
  
</body>
</html>