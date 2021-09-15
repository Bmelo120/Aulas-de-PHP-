// Permitir que o usuário escolha entre somar e multiplicar dois numeros 
<?php 
$n1 = 5 ; // URL $_GET["a"];
$n2 = 3; // URL $_GET["b"];
$tipo = "s"; // URL $_GET["op"];

echo "Os valores foram $n1 e $n2 ";
$r = ($tipo == "m") ? $n1+$n2 : $n1*$n2;
$t = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
echo "\nO resultado sera $r";
echo "\nO resultado sera $t";
?>