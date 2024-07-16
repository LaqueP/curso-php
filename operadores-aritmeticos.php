<?php

echo ( 5 * 6) . " " . (5 / 4);

echo "\n";

echo 5 / 2;
echo "\n";
echo 5 % 2; // el operador de módulo, devuelve el residuo, en este caso faltaria 1 para llegar a 5
$horas = 7000;
$minutos_hora = 3600;
$resultado = (int)($horas / $minutos_hora);
echo "\n";
echo "$horas segundos vonvertidos a horas son" . " " . ($horas / $minutos_hora) . " " . "horas" . "\n";
echo "Faltan" . " " . $minutos_hora - ($horas % $minutos_hora) . " " . "segundos para completar " . $resultado . " " . "hora";

echo "\n";  