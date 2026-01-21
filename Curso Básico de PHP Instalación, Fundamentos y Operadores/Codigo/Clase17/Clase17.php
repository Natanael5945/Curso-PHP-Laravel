<?php

//Operadores aritméticos en PHP
$a = 10;
$b = 3;
$c = "2";   
echo "Operadores Aritméticos en PHP:\n";
echo "-----------------------------------------------\n";
echo "Suma: $a + $b = " . ($a + $b) . "\n"; // Suma
echo "Resta: $a - $b = " . ($a - $b) . "\n"; // Resta
echo "Multiplicación: $a * $b = " . ($a * $b) . "\n"; // Multiplicación
echo "División: $a / $b = " . ($a / $b) . "\n"; // División
echo "Módulo: $a % $b = " . ($a % $b) . "\n"; // Módulo
echo "Exponenciación: $a ** $b = " . ($a ** $b) . "\n"; // Exponenciación
echo "Identidad: $c = " .  "con operador: " . (gettype(+ $c)) . " sin operador: " . gettype($c) . "\n"; // Identidad, agrega el operador + delante de una variable para convertirla a número si es posible, ya sea entero o flotante
echo "Negación: $a = " . (-$a) . "\n"; // Negación
echo "-----------------------------------------------\n";

//Convertidor automatico de segundos a horas
$segundos = 5000;
$horas = $segundos / 3600;
$sobrante_segundos = $segundos % 3600;
echo "\nConvertidor automático de segundos a horas:\n"; 
echo "-----------------------------------------------\n";
echo "$segundos segundos son " . $horas . " horas.\n";
echo "Segundos sobrantes: " . $sobrante_segundos . " segundos.\n";

//como solicitar datos al usuario en consola
echo "\nSolicitando datos al usuario en consola:\n";
echo "-----------------------------------------------\n";
echo "Ingrese un número de segundos para convertir a horas: ";
$handle = fopen ("php://stdin","r");//es una forma de leer datos desde la consola
$input_segundos = fgets($handle); // espera a que el usuario ingrese un valor y presione Enter
$input_horas = $input_segundos / 3600;
$input_sobrante_segundos = $input_segundos % 3600;
echo "$input_segundos segundos son " . $input_horas . " horas.\n";
echo "Segundos sobrantes: " . $input_sobrante_segundos . " segundos.\n";
fclose($handle);    