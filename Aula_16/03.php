<?php 
$S="Essa será uma string gigantescamente gigante......";
$r = wordwrap($S, 5, "</br>\n", false);
echo $r;

?>