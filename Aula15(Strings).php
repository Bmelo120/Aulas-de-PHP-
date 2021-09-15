<?php 

//strtolower()-> Deixa tudo em minucula

$nome = "Barbara Melo";
print("Seu nome é".strtolower($nome));

//strtoupper-> Deixa tudo em maiuscula

$nome = "Barbara Melo";
print("Seu nome é".strtoupper($nome));

//ucfirst-> Primeira letra em maiuscula

$nome = "Barbara Melo";
print("Seu nome é".ucfirst($nome));

//ucwords=-> Primeira letra pra cada palavra maiuscula 

$nome = "Barbara Melo";
print("Seu nome é".ucwords($nome));

//strrev -> Nome ao contrario

$nome = "Barbara Melo";
print("Seu nome é".strrev($nome));

//strpos-> Determinar em qual posição esta a string 

$frase = "Estou aprendendo PHP";
$pos = strpos($frase, "PHP");

echo "A string foi encontrada na posição $pos";

//stripos -> Determinar em qual posição esta a string, idependente da forma escrita

$frase = "Estou aprendendo PHP";
$pos = stripos($frase, "php");

echo "A string foi encontrada na posição $pos";

//substr_count

$frase = "Esou aprende PHP no curso em video de PHP";
$cont = substr_count($frase, "PHP");
print("PHP entrado $cont vezes");

//substr

$site = "Curso em video";
$sub = substr($site, 0, 5); // 0 = inicio da contagem das letras // 5 = Final da contagem das letras 
print("$sub ");

//str_pad

$nome = "Oliveira";
$novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
print("Meu professor $novo e chato");

// str_repeat-> Repetir 

$txt = str_repeat("Php", 5);
print("O textp gerado foi $txt");
print(str_repeat("-", 20));

// str_ireplace-> Substitui a palavra 

$frase = "Gosto de estudar Matematica";
$novafrase = str_ireplace("Matematica", "PHP", $frase);
print($novafrase);

?>