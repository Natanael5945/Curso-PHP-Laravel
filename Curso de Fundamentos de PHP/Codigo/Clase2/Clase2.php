<?php
//Definiendo variables
$titulo_curso = "Curso de Fundamentos de PHP";
$precio = 199.99;
$fecha_publicacion = "2025-03-05";
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
                distinctio ipsa quaerat a laboriosam, suscipit inventore nam autem. Ratione temporibus rerum dolores error?</p>

    </body>

</html>