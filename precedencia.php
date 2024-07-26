<?php

// Documentación https://www.php.net/manual/es/language.operators.precedence.php



//associación de derecha
$c = 10;
$a = 5;
//associación de izquierda
$b = $a - $c +$a;
echo $b;
echo "\n";
//associación de derecha
$a = $b = $c;

echo $b;
echo "\n";
echo $a;
echo "\n";