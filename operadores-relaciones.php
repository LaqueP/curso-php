<?php
  
$a = 1;
$b = 2;
$b2 = '2';
$c = 3;
$d = 1;
$e = 2;


// igual == | No tiene en cuenta el tipo de dato
var_dump($a == $d);
// Identico === | Mismo tipo de dato
var_dump($b === $b2);
// Falso != | No tiene en cuenta el tipo de dato
var_dump($b != $b2);
// Totalmente Falso !== | Si compara el tipo de datophp 
var_dump($b !== $b2);
// > Mayor 
var_dump($b > $b2);
// < Menor
var_dump($b < $c);

// >= Mayor o igual
var_dump($b >= $b2);
// <= Menor o igual
var_dump($b <= $b2);
// Operador de Nave <=>   Devuelve -1 cuando es negativo, devuelve 1 cuando es positivo
var_dump(2 <=> 1); // Devuelve 1
var_dump(1 <=> 2); // Devuelve -1

// ?? Fusión de null

var_dump($j ?? $c);