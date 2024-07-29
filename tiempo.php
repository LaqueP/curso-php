<?php

$horas = readline("Ingresa las horas: ");

$segundos = (int) ($horas * 3600);
// $segundos = (int) ($segundos % 3600);
$minutos = (int) ($horas * 60);

echo "$horas horas, son un total de $segundos segundos o un total de $minutos minutos";

echo "\n";