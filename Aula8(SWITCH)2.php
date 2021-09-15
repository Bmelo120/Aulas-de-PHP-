/** Dias da semana */
<?php 
$d= 2;
switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Levanta e vai estudar! :)";
        break;
    case 7:
    case 8:
        echo "Decanse, pequeno gafanhoto ;)";
        break;
    default:
        echo "Dia da semana invalido !";
}
?>