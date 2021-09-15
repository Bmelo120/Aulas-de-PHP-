<?php 
$n= 4 ;
$o= 3 ;
switch ($o) {
    case 1:
        $r = $n * 2;
        break;
    case 2:
        $r = $n ^ 3;
        break;
    case 3:
        $r = sqrt($n);
        break;
}
echo "O resultado da operação solicitada foi $r";
?>