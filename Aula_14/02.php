<?php
function somar(){
$p = func_get_args();
$t = func_num_args();
$s = 0;

for ($i=0; $i <$t ; $i++) { 
  $s += $p[$i];
}

return $s;

}

$res= somar(3,6,7,2,8,10);
echo "$res";
?>