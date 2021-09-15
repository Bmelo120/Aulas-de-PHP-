<?php 
$a = 3;
$b = &$a;
$b += 5;
echo "A variavel A vale $a";
echo "\nA variavel B vale $b";
?>