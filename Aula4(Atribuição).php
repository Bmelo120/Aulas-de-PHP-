//Aplicar 10% de desconto
<?php 
$preco = 1000; // URL $_GET["p"];
// echo "O preço recebido recebidos: $preco";
echo "O preço recebido do produto e R$ " . number_format($preco, 2);
//$preco = $preco + ($preco*10/100);
//ou
$preco += $preco*10/100; // +=aumento e -= desconto
echo "\nE o novo preço com 10% de aumento sera R$ " . number_format($preco, 2);
?>