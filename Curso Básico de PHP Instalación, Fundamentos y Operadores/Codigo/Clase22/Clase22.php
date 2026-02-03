<?php

/*Reto:
Hacer un programa que convierta horas, minutos y segundos a segundos
*/

echo "-------------------------------------------------------------\n";
echo "Clase 22 - Conversión de horas, minutos y segundos a segundos\n";

//Solicitar al usuario que ingrese horas, minutos y segundos
$horas = readline("Ingrese el tiempo en horas: "); // Solicita al usuario que ingrese el tiempo en horas
$minutos = readline("Ingrese el tiempo en minutos: "); // Solicita al usuario que ingrese el tiempo en minutos
$segundos = readline("Ingrese el tiempo en segundos: "); // Solicita al usuario que

//Calcula el total de segundos --Conversión a segundos--
$segundos_totales = ($horas * 3600) + ($minutos * 60) + $segundos; // Convierte horas y minutos a segundos y suma todo

//Imprimiendo el resultado
echo "$horas horas equivale a: " . ($horas * 3600) . " segundos.\n"; // Muestra la conversión de horas a segundos
echo "$minutos minutos equivale a: " . ($minutos * 60) . " segundos.\n"; // Muestra la conversión de minutos a segundos
echo "La cantidad de segundos ingresada es: " . $segundos . " segundos.\n"; // Muestra la cantidad de segundos ingresada    
echo "El tiempo total en segundos es: " . $segundos_totales . " segundos.\n"; // Muestra el resultado al usuario
echo "-------------------------------------------------------------\n";
