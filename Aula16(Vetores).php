<?php 

$n = array(3,5,8,2);
$n[] = 7;
print_r($n);

$c = range(5, 20, 2); // Vai começar no 5 ate o 20 de 2 em 2 
print_r($c);

$c = range(5, 20, 2); // Vai começar no 5 ate o 20 de 2 em 2 
foreach ($c as $v) {
    echo "$v ";
}

$v = array( "A" => 5,
            5 => 9,
            2 => 8,
            1 => 7);

 unset($v[2]);
 print_r($v);

$v = array( "nome" => "Barbara",
             "idade" => 21,
             "peso" => 65.5 );
     foreach($v as $k => $c){
       echo "O campo $k possui $c\n";
        }



?>