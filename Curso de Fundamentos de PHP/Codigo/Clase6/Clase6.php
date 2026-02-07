<?php
//Definiendo variables
$curso = [
    "titulo" => "Curso de fundamentos de PHP",
    "subtitulo" => "Introducción a PHP",
    "descripcion" => "Este curso es introductorio sobre el lenguaje de programación PHP, donde se veran los fundamentos de este",
    "precio" => 199.99,
    "fecha_publicacion" => "05-03-2025",
    "estado"=> "Activo",
    "nivel"=> "Básico",
    "tags" => ["HTML", "CSS", "JAVASCRIPT", "PHP", "LARAVEL"],
    "clases" => ["Introducción a PHP", "Sintaxis básica", "Estructuras de control", "Funciones", "Programación Orientada a Objetos"]
];


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $curso['titulo'] ?></title>
    </head>

    <body>

        <h1>Bienvenido al <?= $curso['titulo'] ?></h1>
        <h2><?= $curso['subtitulo'] ?></h2>
        <h3>Cuesta: $<?= $curso['precio'] ?></h3>

        <h3>Fue publicado: <?= $curso['fecha_publicacion'] ?></h3>
        
        <h3>Descripción del curso</h3>
            <p><?= $curso['descripcion'] ?></p>
        
        <!--Forma 3 de usar PHP dentro de HTML para estructuras condicionales-->
        <h2>El curso está <?= $curso['estado'] ?>.</h2>
    
        <h2>Nivel del curso: <?= $curso['nivel']?></h2>

        <!--Ejercicio: Usar una estructura condicional para mostrar un mensaje diferente según el nivel del curso-->
        <?php 
            if($curso['nivel'] == "Básico" || $curso['nivel'] == "básico"){
                echo "<p>Este curso es recomendado para quienes empienzan en programación.</p>";
            } elseif($curso['nivel'] == "intermedio" || $curso['nivel'] == "Intermedio"){
                echo "<p>Este curso es recomendado para quienes tienen conocimientos básicos de programación.</p>";
            } else {//Para el caso de que el curso sea avanzado o cualquier otro nivel que no sea básico o intermedio
                echo "<p>Este curso es ideal para estudiantes con conocimientos solidos en programación.</p>";
            }
        ?>


        <!--Mostrar las etiquetas del curso usando el arreglo con foreach -- forma 2-->
        <strong>Etiquetas del curso:</strong>
        <ul>
            <?php foreach($curso['tags'] as $tag) : ?>
                <li><?= $tag ?></li>
            <?php endforeach; ?>
        </ul>

        <!--Reto Clase4-->
        <strong>Clases o contenido:</strong>
        <ol>
            <?php foreach($curso['clases'] as $clase) :?>
                <li><?= $clase ?></li>
            <?php endforeach; ?>
        </ol>
        <?php
            
        ?>

    </body>

</html>