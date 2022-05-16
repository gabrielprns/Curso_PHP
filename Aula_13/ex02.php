<?php
$n = isset($_GET["num"])?$_GET["num"]:1;
echo "A tabuada de $n é igual a: <br/>";
for ($c=0; $c<=10; $c++) { 
  $tab = $n*$c;
  echo"<br/> $n * $c = $tab" ;
}
?>