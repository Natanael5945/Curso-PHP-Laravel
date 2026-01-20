<?php

//Tipos de datos en PHP
$entero = 42; // Entero
$flotante = 3.14; // Flotante
$cadena = "Hola, Mundo!"; // Cadena de texto
$booleano = true; // Booleano
$arreglo = array(1, 2, 3); // Arreglo - inverstigar
$objeto = (object) ['nombre' => 'Juan', 'edad' => 30]; // Objeto - investigar
$nulo = null; // Nulo, variable sin valor
$double = 2.71828; // Double
$undefined; // Undefined, dice hay una variable definida pero no inicializada
$char = 'A'; // Carácter
//Hay mas tipos de datos en PHP, pero estos son los mas comunes

var_dump($entero);
var_dump($flotante);   
var_dump($cadena);
var_dump($booleano);
var_dump($arreglo);
var_dump($objeto);
var_dump($nulo);
var_dump($double);
//var_dump($undefined); //Descomentar esta linea genera un aviso de variable indefinida solo para fines educativos
var_dump($char);

//Probando la conversión automatica de tipos de datos de PHP
echo "\nProbando la conversión automática de tipos de datos de PHP:\n";
echo "-----------------------------------------------\n";
$numerito = "23"; // Cadena que contiene un número
var_dump($numerito); // El resultado es "23", una cadena
$numerito = $numerito + 2;
var_dump($numerito); // El resultado es 25, un entero

echo "\nOtra prueba:\n";
echo "-----------------------------------------------\n";
$numerito = $numerito + 2.5;//$numerito es 25, un entero ya que guardo el resultado anterior 
var_dump($numerito); // El resultado es 27.5, un flotante

echo "\nOtra prueba mas:\n";
echo "-----------------------------------------------\n";
$numerito = "23";
$nuevo_numerito = $numerito + 2;
var_dump($nuevo_numerito); // El resultado es 25, un entero
var_dump($numerito); // El resultado es 23, un entero, porque las cadenas no modifican la variable original

//Caso interesante
echo "\nCaso interesante:\n";
echo "-----------------------------------------------\n";
$papas = "10 papas en el costal";
$suma_papas = $papas + 5; //php convierte la cadena a número automáticamente, pero da un warning si la cadena contiene texto después del número
echo "Sumando papas: $suma_papas\n";
var_dump($suma_papas); // El resultado es 15, un entero, PHP toma el valor numérico al inicio de la cadena
//php ignora el texto que no puede convertir a número, pero no sirve si el texto está al inicio o si no hay números, o tambien el numero esta en medio del texto o final del texto
//php es muy flexible con los tipos de datos, pero es importante tener cuidado para evitar errores inesperados
//php es un lenguaje de tipado débil
