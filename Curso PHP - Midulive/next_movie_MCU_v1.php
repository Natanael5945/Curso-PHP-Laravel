<?php 
//Las llamadas a API se puede hacer de muchas formas, pero la mas basica y cercana a PHP,
//es usando el comando CURL, que es una herramienta de linea de comandos para transferir datos desde o hacia un servidor, utilizando uno de los protocolos soportados (HTTP, HTTPS, FTP, etc.).

//Definimos la constante que contiene la URL de la API de Marvel
const API_URL = "https://www.whenisthenextmcufilm.com/api";
//Inicializar una nueva sesión de cURL; ch = cURL  handle
$ch = curl_init(API_URL);
//Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//Ejecutar la sesión de cURL y almacenar el resultado en una variable
$result = curl_exec($ch); //curl_exec() ejecuta la sesión de cURL y devuelve el resultado como una cadena de texto, o false si ocurre un error.

//una alternativa seria utilizar file_get_contents() para hacer la petición a la API, pero esta función no es tan flexible como cURL y puede no funcionar en algunos servidores debido a restricciones de seguridad o configuraciones de PHP. Además, cURL ofrece más opciones y control sobre la petición, como la posibilidad de establecer encabezados personalizados, manejar cookies, seguir redirecciones, entre otras cosas. Por lo tanto, aunque file_get_contents() puede ser una opción más sencilla para hacer peticiones HTTP, cURL es generalmente recomendado para aplicaciones más complejas o que requieren mayor control sobre las peticiones.
// $result = file_get_contents(API_URL); //si solo quieres hacer un Get de una API, cURL te permite hacerlo de una forma mas sencilla, pero si quieres hacer peticiones mas complejas, como POST, PUT, DELETE, etc. cURL es la mejor opción.


$data = json_decode($result, true); //Decodificar el JSON recibido en un array asociativo de PHP
//Cerrar la sesión de cURL
curl_close($ch);

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
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
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