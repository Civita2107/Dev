<?php
$a=readline("Inserisci una frase: ");
$b=explode(' ', $a);
$c=str_replace(array(',', '.', ';', ':', '-'), '', $b);
$d=array_count_values($c);
$e=ksort($d);
$f=arsort($d);

print_r($c);
print_r($d);
print_r($e . "\n");
print_r($e . "\n");

?>