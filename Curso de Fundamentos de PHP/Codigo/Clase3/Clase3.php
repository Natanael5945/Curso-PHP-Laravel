<?php
//Definiendo variables
$titulo_curso = "Curso de Fundamentos de PHP";
$precio = 199.99;
$fecha_publicacion = "2025-03-05";
$archivado = true; // Nueva variable para indicar si el curso está archivado si es true, sino false por si esta activo
$estado = $archivado ? "archivado" : "activo"; // Operador ternario para asignar el estado del curso
$nivel_curso = "Avanzado"; // Nueva variable para el nivel del curso

//Forma de compañero de platzi
/*
$nivel_curso2 = array(

        "Basico" => array(

            "Mensaje" => "Para quienes comienzan a programar\n"

        ),

        "Intermedio" => array(

            "Mensaje" => "Para quienes conocen de programación\n"

        ),

        "Avanzado" => array(

            "Mensaje" => "Para quienes saben programar\n"

        ),

    );
*/
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--
        <title><?php echo $titulo_curso; ?></title>
        <p>Forma larga de mostrar información con php dentro de etiquetas hmtl</p>
        -->
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
        
        <!--Forma 1 de usar PHP dentro de HTML para estructuras condicionales-->
        <?php 
        // Uso de estructura condicional para mostrar si el curso está archivado o activo
        if ($archivado) {
            echo "<h2>El curso está archivado.</h2>";
        } else {
            echo "<h2>El curso está activo.</h2>";
        }
        ?>

        <!--Forma 2 de usar PHP dentro de HTML para estructuras condicionales-->
        <?php if ($archivado) : ?>
            <h2>El curso está archivado.</h2>
        <?php else : ?>
            <h2>El curso está activo.</h2>
        <?php endif; ?>

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



    <?php
/*
    $nivel = "Basico";

    if ($nivel == "Basico") {

        echo $nivel_curso2["Basico"]["Mensaje"];

    }

    elseif ($nivel == "Intermedio") {

        echo $nivel_curso2["Intermedio"]["Mensaje"];

    }

    else {

        echo $nivel_curso2["Avanzado"]["Mensaje"];

    }
*/
    ?>

    </body>

</html>