<?php

$cad = array("nome"=>"Ana",
"Idade"=>17,
"Peso"=>70);

$cad["Fuma"] = true;

foreach($cad as $campo => $valor){
  echo" O valor de $campo é $valor. ";
}
?>