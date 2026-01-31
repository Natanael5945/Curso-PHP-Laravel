<?php

//Precedencia de operadores
//Los operadores con mayor precedencia se evalúan antes que los de menor precedencia
//Como en otros lenguajes, los operadores aritméticos tienen mayor precedencia que los operadores de comparación y estos a su vez tienen mayor precedencia que los operadores lógicos
//O como vimos en el caso anterior de los operadores de incremento y decremento que tienen mayor precedencia que los operadores aritméticos, o asignación segun si es prefijo o sufijo
//La precedencia de los operadores en PHP se puede consultar en la documentación oficial: https://www.php.net/manual/es/language.operators.precedence.php
//Para cambiar la precedencia de los operadores se pueden usar paréntesis
echo "Operador de incremento precedencia\n";
$contador = 0; // Inicializa la variable $contador en 0
var_dump($contador); // 0
$nuevo_valor = $contador++; // Asigna el valor de $contador a $nuevo_valor y luego incrementa $contadoor en uno
var_dump($nuevo_valor); // 0
var_dump($contador); // 1
echo 'Es como hicieramos: ($nuevo_valor = $contador)++;' . "\n";// El operador de asignación tiene mayor precedencia que el operador de incremento
$nuevo_valor = ++$contador; // Incrementa $contador en uno y luego asigna el valor de $contador a $nuevo_valor
var_dump($nuevo_valor); // 2
var_dump($contador); // 2
echo 'Es como hicieramos: $nuevo_valor = (++$contador);' .  "\n";// El operador de incremento tiene mayor precedencia que el operador de asignación

//Tambien tenemos la asociatividad de los operadores
//La mayoría de los operadores en PHP son asociativos de izquierda a derecha, lo que significa que se evalúan de izquierda a derecha cuando tienen la misma precedencia
//Sin embargo, algunos operadores como el operador de asignación (=) son asociativos de derecha a izquierda, lo que significa que se evalúan de derecha a izquierda cuando tienen la misma precedencia
echo "\n";
echo "Operador de asignación asociatividad\n";
$b = 10;
$a = $b = $c = 5; // Asigna el valor 5 a las variables $a, $b y $c
var_dump($a); // 5
var_dump($b); // 5
var_dump($c); // 5  

//Esto tambien lo podemos ver en los ejemplos trabajados con los operadores logicos anteriomente
echo "\n";
echo "Operador lógico asociatividad\n";
$michis_4_patas = true;
$michis_programan_con_php = false;
$resultado = $michis_4_patas and $michis_programan_con_php;
var_dump($resultado); // true
//¿Por qué? 
//Porque el operador de asignación (=) tiene mayor precedencia que el operador lógico and
//Entonces se evalúa como: $resultado = $michis_4_patas; and $michis_programan_con_php;
//Primero se asigna el valor de $michis_4_patas a $resultado, luego se evalúa el operador and pero su resultado no se asigna a ninguna variable
//Para que funcione como esperamos, debemos usar paréntesis para cambiar la precedencia
$resultado = ($michis_4_patas and $michis_programan_con_php);
var_dump($resultado); // false  