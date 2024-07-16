<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_php = false;

var_dump($michis_felinos && $michis_4_patas); //Es es un AND
var_dump($michis_felinos || $michis_4_patas); //Es un OR
var_dump(!$michis_felinos); // Esto es un NOT

$resultado = $michis_4_patas AND $michis_programan_php; 

var_dump($resultado);

echo "\n";
