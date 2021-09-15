<?php 

$a = 1954;// isset($_GET["ano"])?$_GET["ano"]:1900;
$i = date("Y") - $a;
echo "Você nasceu em ano $a e tera $i anos";
if($i < 16) {
    $tipoVoto = "Não vota";
}
elseif (($i >= 16 && $i < 18) || ($i>65)) {
        $tipoVoto = "Voto opcional";
}
  else {
        $tipoVoto = "voto obrigatorio";
}

echo "\nPara essa idade $tipoVoto";
?>