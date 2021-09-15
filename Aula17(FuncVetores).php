<?php

$v = array ("A", "J", "M", "X", "K");

// ou $tot = count($v)
                      //$tot
echo "Um vetor tem" . count($v) . " elementos"; 

echo "\n";

print_r($v);
// var_dump($v); -> exibe a quantidade de elementos e o tipo de cada um

$v [] = "O"; // add no ultimo ou array_push ($v, "O");
print_r($v);

// array_pop($n) -> elimina o ultimo elemento 

array_unshift($v, 7); //add no primeiro elemento 
print_r($v);
// array_shift($n) -> elimina o primeiro elemento

/**sort($v); // Ordenado crescente // rsort($v) Ordenado decrescente // SEM ALTERAR OS INDICES  
print_r($v); */

asort($v); // Ordenado crescente ALTERA OS INDICES  // arsort($v) Ordenado decrescente //
print_r($v);

// ksort($v); // Orderna crescente SOMENTE os indices 
// krsort($v); // Ordena decrescente SOMENTE os indices 


?>