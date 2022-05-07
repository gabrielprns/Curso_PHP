<?php
$nome=$_GET["Nome"];
$ano=$_GET["ano"];
$sexo=$_GET["sexo"];
$idade= date("Y")-$ano;
echo" <br/> $nome tem $idade anos e pertence ao sexo $sexo";

?>