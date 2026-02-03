<?php

echo "-------------------------------------------------------------\n";
echo "Clase 21 - Conversión de segundos a horas, minutos y segundos\n";

$segundos = readline("Ingrese el tiempo en segundos: "); // Solicita al usuario que ingrese el tiempo en segundos
$horas = (int) ($segundos/3600); // Calcula las horas dividiendo los segundos entre 3600 y convirtiendo el resultado a entero
$segundos = (int) ($segundos % 3600); // Actualiza los segundos con el resto de la división entre segundos y 3600
$minutos = (int) ($segundos/60); // Calcula los minutos dividiendo los segundos entre 60 y convirtiendo el resultado a entero
$segundos = (int) ($segundos % 60); // Actualiza los segundos con el resto de la división entre segundos y 60

echo "El tiempo es: " . $horas . " horas, " . $minutos . " minutos y " . $segundos . " segundos.\n"; // Muestra el resultado al usuario
echo "-------------------------------------------------------------\n";