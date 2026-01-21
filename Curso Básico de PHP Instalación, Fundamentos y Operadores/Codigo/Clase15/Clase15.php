<?php

$michis_felinos = true;
$michis_4patas = true;
$michis_vuelan = false;
$michis_programan_con_php = false;

//Operadores logicos AND (&&), OR (||) y NOT (!)

//AND (&&)
var_dump($michis_felinos && $michis_4patas); //true
var_dump($michis_felinos && $michis_vuelan); //false
var_dump($michis_vuelan && $michis_programan_con_php); //false
echo "\n-------------------------------------------------------------\n";

//OR (||)
var_dump($michis_felinos || $michis_4patas); //true
var_dump($michis_felinos || $michis_vuelan); //true
var_dump($michis_vuelan || $michis_programan_con_php); //false
echo "\n-------------------------------------------------------------\n";

//NOT (!)
var_dump(!$michis_felinos); //false
var_dump(!$michis_vuelan); //true
var_dump(!$michis_programan_con_php); //true
var_dump(!($michis_felinos && $michis_4patas)); //false
echo "\n-------------------------------------------------------------\n";

//Experimento
$resultado = $michis_4patas and $michis_programan_con_php;
var_dump($resultado); //true, ¿Porque? Porque el operador AND tiene menor precedencia que el operador de asignacion (=)
//Para evitar confusiones, es recomendable usar paréntesis para dejar claro el orden de las operaciones
echo "\n-------------------------------------------------------------\n";

//Reto
//Suponiendo que tenemos las siguientes variables:
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

//¿Cual es el resultado de las siguientes expresiones?
var_dump($es_un_michi_grande && $le_gusta_comer); //true
var_dump($es_un_michi_grande || $sabe_volar); //true
var_dump($sabe_volar || $tiene_2_patas); //false
var_dump(!$le_gusta_comer); //false
var_dump(!$le_gusta_comer || $es_un_michi_grande); //true