<?php
$v = array(1=> "A", 7=> "B", 9=> "C");
$v[]="D";
unset($v[10]);
print_r($v);

?>