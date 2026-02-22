<?php 
declare(strict_types=1);

const API_URL = "https://www.whenisthenextmcufilm.com/api";

// Función para obtener los datos de la API, esta función hace una petición HTTP a la URL especificada y devuelve los datos decodificados en un array asociativo de PHP. En este caso, se utiliza file_get_contents() para hacer la petición, pero también se podría utilizar cURL para obtener los datos de la API. La función json_decode() se utiliza para convertir el JSON recibido en un array asociativo de PHP, lo que facilita su manipulación y acceso a los datos.
// La función get_data() recibe una URL como parámetro, hace la petición a esa URL, decodifica el JSON recibido y devuelve los datos en un array asociativo. En este caso, se llama a la función get_data() con la constante API_URL para obtener los datos de la próxima película del MCU.
//sino agregamos el string $url en la función get_data() y no especificamos el tipo de dato que se espera recibir, la función podría no funcionar correctamente o generar errores si se le pasa un valor que no es una cadena de texto. Al especificar el tipo de dato string, estamos indicando que la función espera recibir una cadena de texto como argumento, lo que ayuda a prevenir errores y a mejorar la legibilidad del código. Además, al declarar el tipo de dato, también se puede aprovechar las características de tipado fuerte de PHP para detectar posibles errores en tiempo de compilación.
//sinoo agregamos :array en la función get_data() y no especificamos el tipo de dato que se espera devolver, la función podría no funcionar correctamente o generar errores si se intenta devolver un valor que no es un array. Al especificar el tipo de dato array, estamos indicando que la función debe devolver un array, lo que ayuda a prevenir errores y a mejorar la legibilidad del código. Además, al declarar el tipo de dato, también se puede aprovechar las características de tipado fuerte de PHP para detectar posibles errores en tiempo de compilación.
// En resumen, especificar los tipos de datos en las funciones es una buena práctica que ayuda a mejorar la calidad del código, prevenir errores y aprovechar las características de tipado fuerte de PHP. Se les llama "type hints" o "type declarations" y son una forma de indicar qué tipo de datos se espera recibir como argumentos y qué tipo de datos se espera devolver como resultado de una función. Esto ayuda a mejorar la legibilidad del código, a prevenir errores y a aprovechar las características de tipado fuerte de PHP.
//Eso si, sino agregamos declare(strict_types=1); al inicio del archivo, los type hints no se aplicarán de manera estricta y PHP intentará convertir los valores a los tipos esperados en lugar de generar un error. Por ejemplo, si una función espera un string pero se le pasa un número, PHP intentará convertir ese número a una cadena de texto en lugar de generar un error. Al agregar declare(strict_types=1); estamos indicando que queremos que los type hints se apliquen de manera estricta, lo que significa que si se le pasa un valor que no coincide con el tipo esperado, PHP generará un error en lugar de intentar convertirlo. Esto ayuda a prevenir errores y a mejorar la calidad del código al asegurarnos de que los valores sean del tipo esperado.
// En resumen, declare(strict_types=1); es una declaración que se coloca al inicio de un archivo PHP para indicar que se desea que los type hints se apliquen de manera estricta, lo que significa que si se le pasa un valor que no coincide con el tipo esperado, PHP generará un error en lugar de intentar convertirlo. Esto ayuda a prevenir errores y a mejorar la calidad del código al asegurarnos de que los valores sean del tipo esperado. Esto se les llama tambien tipos opcionales, ya que no es obligatorio especificar los tipos de datos en las funciones, pero es una buena práctica hacerlo para mejorar la calidad del código y prevenir errores.eso si que sin la linea de codigo explicado php se los toma como sugerencias, pero no se aplican de manera estricta,
//lo que significa que si se le pasa un valor que no coincide con el tipo esperado, PHP intentará convertirlo en lugar de generar un error. Al agregar declare(strict_types=1); estamos indicando que queremos que los type hints se apliquen de manera estricta, lo que significa que si se le pasa un valor que no coincide con el tipo esperado, PHP generará un error en lugar de intentar convertirlo. Esto ayuda a prevenir errores y a mejorar la calidad del código al asegurarnos de que los valores sean del tipo esperado.
function get_data(string $url):array
{
    //una alternativa seria utilizar file_get_contents() para hacer la petición a la API, pero esta función no es tan flexible como cURL y puede no funcionar en algunos servidores debido a restricciones de seguridad o configuraciones de PHP. Además, cURL ofrece más opciones y control sobre la petición, como la posibilidad de establecer encabezados personalizados, manejar cookies, seguir redirecciones, entre otras cosas. Por lo tanto, aunque file_get_contents() puede ser una opción más sencilla para hacer peticiones HTTP, cURL es generalmente recomendado para aplicaciones más complejas o que requieren mayor control sobre las peticiones.
    $result = file_get_contents($url); //si solo quieres hacer un Get de una API, cURL te permite hacerlo de una forma mas sencilla, pero si quieres hacer peticiones mas complejas, como POST, PUT, DELETE, etc. cURL es la mejor opción.


    $data = json_decode($result, true); //Decodificar el JSON recibido en un array asociativo de PHP

    return $data;
}

// La función get_until_message() recibe un número entero que representa los días restantes para el estreno de la película y devuelve un mensaje personalizado dependiendo de ese número. Utiliza la estructura match para evaluar el valor de $days y devolver el mensaje correspondiente. Por ejemplo, si $days es igual a 0, devolverá "¡Hoy es el gran día!", si $days es igual a 1,
// devolverá "Mañana es el gran día", si $days es menor a 7, devolverá "Esta semana se estrena", si $days es menor a 30, devolverá "Este mes se estrena", y para cualquier otro valor de $days, devolverá un mensaje que indica la cantidad de días restantes para el estreno. Esta función ayuda a generar un mensaje más amigable y personalizado para los usuarios dependiendo de la cantidad de días restantes para el estreno de la película.
function get_until_message(int $days): string
{
    return match (true){
        $days == 0 => "¡Hoy es el gran día!",
        $days == 1 => "Mañana es el gran día",
        $days < 7  => "Esta semana se estrena",
        $days < 30 => "Este mes se estrena",
        default => "$days días para el estreno"
    };
}

$data = get_data(API_URL); //Obtener los datos de la API utilizando la función get_data() y almacenarlos en la variable $data
$untilmessage = get_until_message($data["days_until"]); //Obtener el mensaje de días restantes utilizando la función get_until_message() y almacenarlo en la variable $untilmessage

//var_dump($data); //Imprimir el resultado para verificar que se ha recibido correctamente
?>
