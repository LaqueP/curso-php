<?php

// Operador de asignación 
$edad_de_carlos = ($edad_carnet = 18) + 13;

var_dump($edad_de_carlos);

// Operador de incremento
$b1 = 1;

//$b1 = $b1 +1; // 2

$b1 += 1; // 2

var_dump($b1);

// Se puede incrementar siempre 1 con el operador aritmetico ++
$b1++;
var_dump($b1); // 3

/* 
se puede restar -=
se puede multiplicar *=
se puede divir /=
*/

// operador de concatenación .=
$nombre = 'Carlos';
$apellido = 'Reyero';
$nombre .= ' ' . $apellido;

var_dump($nombre);
