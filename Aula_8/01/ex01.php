<?php
  $valor = $_GET["v"];
  $rq = sqrt($valor);
  echo "A raíz de $valor é igual a " . number_format($rq,2);
  echo "<br/> <a href='ex01.html'>Home Page</a>";
?>