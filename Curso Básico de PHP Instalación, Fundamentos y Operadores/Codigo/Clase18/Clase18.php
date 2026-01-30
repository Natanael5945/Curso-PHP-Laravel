<?php
$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

//Operadores relacionales

echo "Operador de igualdad (==): \n";
// Compara si dos valores son iguales
var_dump($a == $b); // true
var_dump($a == $b2); // true (conversión automática de tipo, no le importa el tipo por asi decirlo  sino que el valor o caracter sea el mismo, en el de identidad si le importa el tipo)
var_dump($b == $b2); // true (conversión automática de tipo)
var_dump($a == $c); // false
var_dump($a == $d); // false
echo "\n";

echo "Operador de identidad (===): \n";
// Compara si dos valores son iguales y del mismo tipo
var_dump($a === $b); // true (mismo valor y mismo tipo por eso es el unico true)
var_dump($a === $b2); // false (mismo valor pero diferente tipo)
var_dump($b === $b2); // false (mismo valor pero diferente tipo)
var_dump($a === $c); // false (diferente valor pero mismo tip)
var_dump($a === $d); // false (diferente valor y diferente tipo)
echo "\n";

echo "Operador de desigualdad (!=): \n";
// Compara si dos valores no son iguales
var_dump($a != $b); // false
var_dump($a != $b2); // false (conversión automática de tipo)
var_dump($b != $b2); // false (conversión automática de tipo)
var_dump($a != $c); // true
var_dump($a != $d); // true
echo "\n";

echo "Operador de no identidad (!==): \n";
// Compara si dos valores no son iguales o no del mismo tipo
var_dump($a !== $b); // false
var_dump($a !== $b2); // true (mismo valor pero diferente tipo)
var_dump($b !== $b2); // true (mismo valor pero diferente tipo)
var_dump($a !== $c); // true (diferente valor pero mismo tipo)
var_dump($a !== $d); // true (diferente valor y diferente tipo)
echo "\n";

echo "Operador mayor que (>): \n";
// Compara si un valor es mayor que otro
var_dump($a > $b); // false
var_dump($a > $b2); // false (conversión automática de tipo)
var_dump($b > $b2); // false (conversión automática de tipo)
var_dump($a > $c); // false
var_dump($a > $d); // true
echo "\n";

echo "Operador menor que (<): \n";
// Compara si un valor es menor que otro
var_dump($a < $b); // false
var_dump($a < $b2); // false (conversión automática de tipo)
var_dump($b < $b2); // false (conversión automática de tipo)
var_dump($a < $c); // true
var_dump($a < $d); // false
echo "\n";

echo "Operador mayor o igual que (>=): \n";
// Compara si un valor es mayor o igual que otro
var_dump($a >= $b); // true
var_dump($a >= $b2); // true (conversión automática de tipo)
var_dump($b >= $b2); // true (conversión automática de tipo)
var_dump($a >= $c); // false
var_dump($a >= $d); // true
echo "\n";

echo "Operador menor o igual que (<=): \n";
// Compara si un valor es menor o igual que otro
var_dump($a <= $b); // true
var_dump($a <= $b2); // true (conversión automática de tipo)
var_dump($b <= $b2); // true (conversión automática de tipo)
var_dump($a <= $c); // true
var_dump($a <= $d); // false
echo "\n";

echo "Operador de nave espacial (<=>): \n";
// Compara dos valores y devuelve -1, 0 o 1, -1 si el primer valor es menor, 0 si son iguales y 1 si el primer valor es mayor
var_dump($a <=> $b); // 0
var_dump($a <=> $b2); // 0 (conversión automática de tipo)
var_dump($b <=> $b2); // 0 (conversión automática de tipo)
var_dump($a <=> $c); // -1
var_dump($a <=> $d); // 1
var_dump(5 <=> 2); // 1
var_dump(2 <=> 5); // -1
echo "\n";

echo "Operador de fusión de null (??): \n";
// Devuelve el primer operando si no es null, de lo contrario devuelve el segundo operando
$x = null;
$y = "Hola";
var_dump($x ?? $y); // "Hola"
$z = "Mundo";
var_dump($z ?? $y); // "Mundo"  
var_dump($x ?? $y ?? $z); // "Hola", ya que $x es null, devuelve $y, pero no toca $z porque ya encontro un valor no nulo
echo "\n";
$edad_de_pepito = 23;
$edad_de_juanito;
$edad = $edad_de_juanito ?? $edad_de_pepito ?? 18; // Si $edad_de_juanito no está definida, toma el valor de $edad_de_pepito, si tampoco está definida, toma 18
echo "La edad es: " . $edad . "\n"; // La edad es: 23
var_dump($edad_de_juanito ?? $edad_de_pepito); // 23
echo "\n";

