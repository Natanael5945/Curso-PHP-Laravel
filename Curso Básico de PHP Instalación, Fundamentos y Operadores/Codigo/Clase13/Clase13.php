<?php

//Casting de tipos de datos
$numero = "1234"; //cadena de texto
$entero = (int)$numero; //convertir a entero
$flotante = (float)$numero; //convertir a flotante
$booleano = (bool)$numero; //convertir a booleano
$arreglo = (array)$numero; //convertir a arreglo, pero solo tendrá un elemento

echo "Cadena original: " . $numero . " (Tipo: " . gettype($numero) . ")\n"; //gettype obtiene el tipo de dato
echo "Convertido a entero: " . $entero . " (Tipo: " . gettype($entero) . ")\n";
echo "Convertido a flotante: " . $flotante . " (Tipo: " . gettype($flotante) . ")\n";
echo "Convertido a booleano: " . ($booleano ? 'true' : 'false') . " (Tipo: " . gettype($booleano) . ")\n";
echo "Convertido a arreglo: ";
print_r($arreglo);
var_dump($arreglo);

//casos de la clase
echo "\nEjemplos adicionales de casting:\n";
echo "--------------------------\n";
$numerito = "5";
$numerito = (int)$numerito;
var_dump($numerito); //muestra el tipo de dato y su valor

echo "--------------------------\n";
$dias = 5.89;
$dias = (int)$dias;
var_dump($dias); //muestra el tipo de dato y su valor

echo "--------------------------\n";
$banderita = 500; //valor entero
$banderita = (bool)$banderita; //sera true cuando se convierte a booleano un numero distinto de 0, y false cuando es 0
var_dump($banderita); //muestra el tipo de dato y su valor
echo "--------------------------\n";

//Reto adicional
echo "\nReto adicional:\n";
echo "--------------------------\n";
//Facil
$nombre = "Carlos";//String
$apellido = "Gomez";//String
$edad = 18;//Integer
$aprobado = true;//Boolean

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //Float
$nombre_completo = $nombre . " " . $apellido; //String
$presento_examen = (bool)1; //Boolean

//Dificil
$numero_preguntas = 5 + "5"; //Integer
$numero_respuestas = "5" + 5; //Integer
$promedio_maximo = $numero_respuestas / 1.0; //Float
$michis = 3 + "5 michis"; //Integer, da la advertencia por el texto pero toma el 3 + 5

echo "\nResultados del reto adicional:\n";
echo "--------------------------\n";
echo "Facil\n";
echo "--------------------------\n";    
var_dump($nombre);
var_dump($apellido);
var_dump($edad);
var_dump($aprobado);
echo "--------------------------\n";
echo "Medio\n";
echo "--------------------------\n";
var_dump($promedio);
var_dump($nombre_completo);
var_dump($presento_examen);
echo "--------------------------\n";
echo "Dificil\n";
echo "--------------------------\n";
var_dump($numero_preguntas);
var_dump($numero_respuestas);
var_dump($promedio_maximo);
var_dump($michis);
echo "--------------------------\n";