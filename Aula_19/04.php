<?php
$r = array("O", "Y", "T");
//ordenação
sort($r);

//ordenação reversa
rsort($r);

//ordenação mantendo os indices de cada elemento
asort($r);

//ordenação reversa mantendo os indices de cada elemento
arsort($r);

//ordenação por chave 
ksort($r);

//ordenação por chave reversa
krsort($r);

print_r($r);
?>