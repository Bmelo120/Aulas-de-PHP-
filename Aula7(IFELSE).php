<?php 

$a = 2000;// isset($_GET["ano"])?$_GET["ano"]:1900;
$i = date("Y") - $a;
echo "Você nasceu em ano $a e tera $i anos";
if($i >= 18) {
    $v = "Ja pode voltar";
    $d = "Ja pode dirigir";
}
else {
    $v = "Não pode voltar";
    $d = "Não pode dirigir";
}
echo "\nCom essa idade você $v e tambem $d";
?>

