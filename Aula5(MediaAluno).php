<?php 
$nota1 = 7 ; // URL $_GET["n1"];
$nota2 = 10; // URL $_GET["n2"];

$m = ($nota1+$nota2)/2;

echo "A media entre $nota1 e $nota2 e $m";

//$sit = ($m<6)?"REPROVADO":"APROVADO";
//echo "\nA situação do aluno e $sit";
//ou
echo "\nA situação do aluno e " . (($m<6)?"REPROVADO":"APROVADO");
?>