<?php 

require 'function.php'; 

$data = get_data(API_URL); //Obtener los datos de la API utilizando la función get_data() y almacenarlos en la variable $data
$untilmessage = get_until_message($data["days_until"]); //Obtener el mensaje de días restantes utilizando la función get_until_message() y almacenarlo en la variable $untilmessage

//var_dump($data); //Imprimir el resultado para verificar que se ha recibido correctamente
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima película de Marvel</title>
    <!-- Centered viewport de pico css-->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>
<body>
    
<main>
    <!--
    <pre style="font-size: 10px; overflow:scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre>
    -->
    <h2>La próxima película del MCU</h2>
    <section>
        <img src="<?= $data["poster_url"]?>" width="300" alt="Poster de <?= $data["title"]?>" style = "Border-radius: 16px;">
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> - <?= $untilmessage ?></h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"] ?></p>
    </hgroup>

</main>

</body>
</html>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    h2 {
        display: flex;
        justify-content: center;
    }
    section {
        display: flex;
        justify-content: center;
    }

</style>