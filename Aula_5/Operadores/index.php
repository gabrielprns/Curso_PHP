<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores</title>
</head>
<body>
  <?php 
  $n1 = 5;
  $n2 = 8;
  $soma = $n1 + $n2 ;
  $subtracao = $n1 - $n2;
  $divisao = $n2/$n1;
  $multiplicacao = $n2 * $n1;
  $modulo = $n2 % $n1;
  $media = ($n2 + $n1) /2;
  echo " A soma é igual a $soma <br/>";
  echo "A subtração é igual a $subtracao <br/>";
  echo "A multiplicação é igual a $multiplicacao <br/>";
  echo "A divisão é igual a $divisao <br/>";
  echo "O módulo é igual a $modulo <br/>";
  echo "A média é igual a $media <br/>";
  echo "A potência é igual a: " . pow($n1, $n2);

  ?>
</body>
</html>