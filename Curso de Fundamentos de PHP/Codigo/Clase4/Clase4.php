<?php
//Definiendo variables
$titulo_curso = "Curso de Fundamentos de PHP";
$precio = 199.99;
$fecha_publicacion = "2025-03-05";
$archivado = true; // Nueva variable para indicar si el curso está archivado si es true, sino false por si esta activo
$estado = $archivado ? "archivado" : "activo"; // Operador ternario para asignar el estado del curso
$nivel_curso = "Avanzado"; // Nueva variable para el nivel del curso
//Etiquetas usando variables
$tag_1 = "PHP";
$tag_2 = "HTML";
$tag_3 = "CSS";

//Etiquetas en un arreglo
$tags = [
    "PHP", // $tags[0], posición 0
    "HTML", // $tags[1], posición 1
    "CSS", // $tags[2], posición 2
];

$otras_tags = array("Backend", "Frontend", "Fullstack", "Programación Orientada a Objetos" );
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titulo_curso ?></title>
        <!--
        <p>Forma corta de mostrar información con php dentro de etiquetas hmtl</p>
        -->

    </head>

    <body>

        <h1>Bienvenido al <?= $titulo_curso ?></h1>

        <h2>Cuesta: $<?= $precio ?></h2>

        <h2>Fue publicado: <?= $fecha_publicacion ?></h2>
        
        <h3>Descripción del curso</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro reprehenderit quia numquam dolorem eum harum
                distinctio ipsa quaerat a laboriosam, suscipit inventore nam autem. Ratione temporibus rerum dolores error?
            </p>
        
        <!--Forma 3 de usar PHP dentro de HTML para estructuras condicionales-->
        <h2>El curso está <?= $estado ?>.</h2>
    
        <h2>Nivel del curso: <?= $nivel_curso ?></h2>

        <!--Ejercicio: Usar una estructura condicional para mostrar un mensaje diferente según el nivel del curso-->
        <?php 
            if($nivel_curso == "Básico" || $nivel_curso == "básico"){
                echo "<p>Este curso es recomendado para quienes empienzan en programación.</p>";
            } elseif($nivel_curso == "intermedio" || $nivel_curso == "Intermedio"){
                echo "<p>Este curso es recomendado para quienes tienen conocimientos básicos de programación.</p>";
            } else {//Para el caso de que el curso sea avanzado o cualquier otro nivel que no sea básico o intermedio
                echo "<p>Este curso es ideal para estudiantes con conocimientos solidos en programación.</p>";
            }
        ?>
        <!--Mostrar las etiquetas del curso usando las variables individuales-->
        <strong>Etiquetas del curso:</strong>
        <ul>
            <li><?= $tag_1?></li>
            <li><?= $tag_2?></li>
            <li><?= $tag_3?></li>
        </ul>

        <!--Mostrar las etiquetas del curso usando el arreglo-->
        <strong>Etiquetas del curso:</strong>
        <ul>
            <li><?= $tags[0] ?></li>
            <li><?= $tags[1] ?></li>
            <li><?= $tags[2] ?></li>
        </ul>

        <!--Reto-->
        <strong>Temas relacionados:</strong>
        <ul>
            <li><?= $otras_tags[1]?></li>
            <li><?= $otras_tags[3]?></li>
        </ul>
    </body>

</html>