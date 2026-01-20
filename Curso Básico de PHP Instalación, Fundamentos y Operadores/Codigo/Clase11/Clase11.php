<?php

//Variables
$nombre = "Juan";
$apellido = "Pérez";
$edad = 25;
$altura = 1.75;
$peso = 70.5;

echo "Nombre: " . $nombre . " " . $apellido . "\n";
echo "Edad: " . $edad . "\n";
echo "Altura: " . $altura . " m\n";
echo "Peso: " . $peso . " kg\n";

//Cambio de valor
$nombre = "Carlos";
$apellido = "Gómez";
$edad = 26;
$altura = 1.80;
$peso = 72.0;

echo "\nDespués del cambio de valores:\n";
echo "Nombre: " . $nombre . " " . $apellido . "\n";
echo "Edad: " . $edad . "\n";
echo "Altura: " . $altura . " m\n";
echo "Peso: " . $peso . " kg\n";
//Vemos que usaron las mismas variables para distintos valores

//Definir nombres de variables que coincidan o tengan logica con su valor o contenido
$numero_1 = "Natanael"; //Mal uso de nombres de variables, ya que se espera un numero no un string

//Constantes
define("PAIS", "Argentina");
define("CIUDAD", "Buenos Aires");
define("PI", 3.1416);

echo "\nConstantes:\n";
echo "País: " . PAIS . "\n";
echo "Ciudad: " . CIUDAD . "\n";
echo "Valor de PI: " . PI . "\n";

//Intento de cambiar el valor de una constante (esto generará un error si se descomenta)
define("PI", 3.14); //No se puede cambiar el valor de una constante una vez definida, NOS DA UN WARNING CORRE EL SCRIPT PERO NO CAMBIA EL VALOR
//PI = 3.14; //No se puede reasignar una constante, NOS DA UN ERROR FATAL O ERROR DE SINTAXIS, NO CORRE EL SCRIPT
echo "Nuevo valor de PI: " . PI . "\n";
//Vemos que las constantes mantienen su valor original a lo largo del script
