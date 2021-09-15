<?php 
$ano = 2000;
$idade = 2021 - $ano;
echo "Quem nasceu tem $ano tem $idade";

$tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";

echo "\nE dessa forma seu voto e $tipo";
?>
