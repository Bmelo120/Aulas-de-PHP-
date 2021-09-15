<?php 
$valor = $_GET["v"];
$rq = sqrt($valor);
echo "A raiz de  $valor e igual a " . number_format($rq, 2);
?>