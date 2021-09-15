<?php 

function teste (&$x) {
    $x += 2;
    echo "O valor de X e $x";
}

$a = 3;
teste($a);
echo"\nO valor de A e $a";

?>