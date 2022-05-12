<?php
$a = isset($_GET["ano"])?$_GET["ano"]:1900;
$i = date("Y")-$a;
echo "Você nasceu em $a e tem $i anos";

if($i>=18 && $i<=65){
  $per = "seu Voto é obrigatório";
}elseif(($i>=16 & $i<=18) || ($i>65)){
  $per = "seu Voto é opcional";
}else{
  $per = "Não Vota";
}
echo " </br> Com essa idade $per"

?>