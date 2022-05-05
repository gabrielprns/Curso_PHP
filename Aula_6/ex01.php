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
  $preco = 100;
  $acres = $preco * 10/100;
  $pref = $preco + $acres;
  echo "O preço com acréscimo de 10% é igual a $pref";
  ?>
  
</body>
</html>