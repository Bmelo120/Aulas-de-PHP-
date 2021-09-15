<?php
$v = 5;
echo "Calcula o fatorial de $v";

$c = $v;
$fat = 1;
do{
$fat = $fat * $c;
$c --;
}while($c >= 1);

echo "\n $v ! = $fat";

?>