<?php
$nome=isset($_GET["Nome"])?$_GET["Nome"]:"Valor não informado";
$ano=isset($_GET["ano"])?$_GET["ano"]:"0";
$sexo=isset($_GET["sexo"])?$_GET["sexo"]:"Valor não informado";
$idade= isset($_GET["ano"])?date("Y")-$ano:"Valor não informado";
echo" <br/> $nome tem $idade anos e pertence ao sexo $sexo";

?>