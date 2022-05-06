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
  $nota1=7.4;
  $nota2=8;
  $media= ($nota1+$nota2)/2;
  $apr= ($media>=7)?"Aprovado":"Reprovado";
  echo "A média é $media e o aluno está $apr"
  ?>
</body>
</html>