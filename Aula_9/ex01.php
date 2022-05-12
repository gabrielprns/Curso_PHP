<?php
$a = isset($_GET["ano"])?$_GET["ano"]:1900;
$i = date("Y")-$a;
echo "Você nasceu em $a e tem $i anos";
?>