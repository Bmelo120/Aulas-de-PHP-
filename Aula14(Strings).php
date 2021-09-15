<?php 

// printf
$p = "Leite";
$pr = 4.5;

// echo "O %p custa R$ " . numbere_format($p, 2)
printf("O %s custa R$ %.2f", $p, $pr);

/**%d -> valor decimal (positivo ou negativo)
%u -> valor decimal sem sinal (apenas positivo)
%f -> valor real*/

// print_r

$v[0] = 4;
$v[1] = 8;
$v[2] = 3;

print_r($v);

$v2 = array (3,7,6,2,1,9);
print_r($v2);

// wordwrap

$t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função Wordwrap";
$r = wordwrap($t, 20, "\n");

echo $r;

// strlen -> comprimento de uma string

$txt = "Curso em video";
$tamanho = strlen($txt);

// trim -> elimina os espaços

$nome = "xxxJoséxdaxSilvaxxx";
echo(strlen($nome));
$novo = (trim($nome));
echo($novo);
echo(strlen($novo));

// Itrim-> elimina os espaço do inicio

$nome = "xxxJoséxdaxSilvaxxx";
echo(strlen($nome));
$nome = ltrim(($nome));
echo($novo);
echo(strlen($novo));

// rtrim-> elimina os espaços do final 

$nome = "xxxJoséxdaxSilvaxxx";
echo(strlen($nome));
$nome = rtrim(($nome));
echo($novo);
echo(strlen($novo));

//str_word_count-> conta palavras 

$frase = "Eu vou estudar PHP";
$cont = str_word_count($frase, 0);
echo $cont;

///explode-> Separa palavra por String 

$site = "curso em video";
$vetor = explode ("", $site);
print_r($vetor);

// str_split -> Separa uma letra por String

$si = "curso em video";
$vetor = str_split ("", $site);
print_r($vetor);

// implode ->Adiciona espaço ou qualquer entre as palavras 

$vetor[0] = "Curso";
$vetor[1] = "em";
$vetor[2] = "Video";
$texto = "implode("*", $vetor)";
print($texto);

// chr -> mostra a letra por tras do codigo

$letra = chr(67);
echo "A letra do codigo 67 e $letra";

// ord -> mostra o codigo por tras da letra 





?>

