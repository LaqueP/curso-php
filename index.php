<?php 
echo "Hola de nuevo \n";

$valor1= 12;
$valor2= 50;
$resultado= $valor1 + $valor2;

echo "El total es $resultado \n";


$nombre = "Carlos";
$apellido = "Reyero";

echo "Mi nombre es $nombre $apellido \n";

$alumnos =[
    "Carlos" => 31,
    "Desi" => 29,
    "Angelita" => 68
];

var_dump($alumnos); // te muestra toda la información de una variable

define("NUMERO_PI", 3.14);

echo NUMERO_PI;