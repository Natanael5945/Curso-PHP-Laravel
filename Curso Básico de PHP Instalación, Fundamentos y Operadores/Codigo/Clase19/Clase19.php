<?php

//Operadores

//Operador de asignación (=)
echo "Operador de asignación (=): \n";
$edad_de_jaimito = 18; // Asigna el valor 18 a la variable $edad_de_jaimito
$nombre_de_jaimito = "Jaimito"; // Asigna el valor "Jaimito" a la variable $nombre_de_jaimito
$es_estudiante = true; // Asigna el valor booleano true a la variable $es_estudiante
$promedio_de_notas = 7.5; // Asigna el valor 7.5 a la variable $promedio_de_notas
var_dump($edad_de_jaimito); // 18
var_dump($nombre_de_jaimito); // "Jaimito"
var_dump($es_estudiante); // true
var_dump($promedio_de_notas); // 7.5
echo "\n";

//Tambien se puede hacer esto con el operador de asignación
$edad_de_jaimito  = ($edad_de_pepito = 18) + 5; // Asigna el valor 18 a $edad_de_pepito y luego suma 5 para asignar 23 a $edad_de_jaimito
var_dump($edad_de_jaimito); // 23
var_dump($edad_de_pepito); // 18    
echo "\n";

//Operador de incremento (++)
echo "Operador de incremento \n";
$contador = 0; // Inicializa la variable $contador en 0
var_dump($contador); // 0
//Hay varias formas de incrementar el valor de una variable en 1 o mas
//Se puede incrementar en uno o una cantidad superior definida
$contador = $contador + 1; // Suma 1 al valor actual de $contador y lo asigna de nuevo a $contador
$contador = $contador + 5; // Suma 5 al valor actual de $contador y lo asigna de nuevo a $contador
var_dump($contador); // 6

//Se puede incrementar en uno o una cantidad superior definida con el operador +=
$contador = 0; // Reinicia la variable $contador a 0
$contador += 1; // Incrementa $contador en 1
$contador += 5; // Incrementa $contador en 5
var_dump($contador); // 6

//Se puede incrementar en uno con el operador de incremento ++
$contador = 0; // Reinicia la variable $contador a 0
$contador++; // Incrementa $contador en 1
$contador++; // Incrementa $contador en 1
$contador++; // Incrementa $contador en 1
var_dump($contador); // 3

//Se puede usar el operador de incremento ++ en forma prefija o sufija, esto debido a la precedencia de operadores
$contador = 0; // Reinicia la variable $contador a 0
var_dump($contador); // 0
var_dump(++$contador); // 1 (incrementa antes de usar el valor)
var_dump($contador); // 1 
var_dump($contador++); // 1 (usa el valor antes de incrementar)
var_dump($contador); // 2
echo "\n";

//Operador de decremento (--)
echo "Operador de decremento \n";
$contador = 5; // Inicializa la variable $contador en 5
var_dump($contador); // 5
//Hay varias formas de decrementar el valor de una variable en 1 o mas
//Se puede decrementar en uno o una cantidad superior definida
$contador = $contador - 1; // Resta 1 al valor actual de $contador y lo asigna de nuevo a $contador
$contador = $contador - 3; // Resta 3 al valor actual de $contador y lo asigna de nuevo a $contador
var_dump($contador); // 1

//Se puede decrementar en uno o una cantidad superior definida con el operador -=
$contador = 5; // Reinicia la variable $contador a 5
$contador -= 1; // Decrementa $contador en 1
$contador -= 3; // Decrementa $contador en 3
var_dump($contador); // 1

//Se puede decrementar en uno con el operador de decremento --
$contador = 5; // Reinicia la variable $contador a 5
$contador--; // Decrementa $contador en 1
$contador--; // Decrementa $contador en 1
$contador--; // Decrementa $contador en 1
var_dump($contador); // 2

//Se puede usar el operador de decremento -- en forma prefija o sufija
$contador = 5; // Reinicia la variable $contador a 5
var_dump($contador); // 5
var_dump(--$contador); // 4 (decrementa antes de usar el valor)
var_dump($contador); // 4
var_dump($contador--); // 4 (usa el valor antes de decrementar)
var_dump($contador); // 3
echo "\n";

//Tambien estan los operadores *= y /=, con la misma logica de los anteriores
echo "Operador de multiplicación y división \n";
$numero = 10; // Inicializa la variable $numero en 10
var_dump($numero); // 10
$numero *= 2; // Multiplica $numero por 2
var_dump($numero); // 20
$numero /= 4; // Divide $numero por 4
var_dump($numero); // 5
echo "\n";

//Y el de concatenación .=
$nombre = "Carlos";
$nombre = "Carlos" . " " . "Pérez"; // Concatena las cadenas para formar "Carlos Pérez", de la forma larga sin usar el operador .=
var_dump($nombre); // "Carlos Pérez"
$nombre = "Carlos"; // Reinicia la variable $nombre a "Carlos"
$nombre .= " " . "Pérez"; // Concatena las cadenas para formar "Carlos Pérez", usando el operador .=
var_dump($nombre); // "Carlos Pérez"
