<?php 
$v1 = 8000; // URL $_GET["x"];
$v2 = 3.999; // URL $_GET["y"];
// echo "Valores recebidos: $v1 e $v2 ";
echo "Valores recebidos $v1 e $v2 ";
echo "\nO valor absoluto de $v2 e " . abs($v2);
echo "\nO valor de $v1 elevado a $v2 e " . pow($v1, $v2);
echo "\nA raiz de $v1 e " . sqrt($v1);
echo "\nO valor de $v2 arredondado e " . round($v2); // ceil(cima) ou floor(baixo)
echo "\nA parte inteira de $v2 e " . intval($v2);
echo "\nO valor de $v1 em modeda e R$" . number_format($v1, 2, ",", ".");
?>