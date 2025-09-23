<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>segundo script en php. Elementos del lenguaje.</title>
    </head>
    <body>
        <h1>Segundo script en php. Elementos del lenguaje.</h1>
        <h2>Entrada y salida</h2>
        <p>La entrada de datos en php es con un formulario o enlace. La salida siempre se produce con la función echo, y su forma abreviada, 
            y la función print.</p>
        <p>Además tenemos la función printf para salida con formato.</p>
        <h3>Función echo</h3>
        <?php 
        echo "<p>La función echo emite el resultado de una expresión a la salida (del servidor al cliente web). Se puede usar como función 
        o como construcción del lenguaje (o sea, sin paréntesis)</p>";
        echo "<p>Esto es un párrafo HTML enviado con echo.</p>";

        $nombre = "Juan";
        echo "<p>Hola, $nombre, ¿cómo estás?</p>";
        echo "<p>Hola, $nombre, ¿cómo estás?</p>";
        // Esto no sirve porque hay más de un argumento 
        // echo("<p>Hola", $nombre, "¿cómo estás?</p>")
        echo("<p>Hola, $nombre, ¿qué tal?</p>");

        // El navegador ignora los \n dentro de las etiquetas, pero pueden actuar dentro del propio html fuera de las etiquetas.

        $nombre = "María";
        $apellidos = "Gómez";
        echo "<br/>Mi nombre es $nombre y mi apellido es $apellidos<br/>";
        echo "<br/>Mi nombre es" . $nombre . "y mi apellido es " . $apellidos . "<br/>";
        echo "<br/> Uno más dos son " . 1+2 . ". Y debería salir 3.<br/>";

        echo "<h4>Forma abreviada</h4>";
        echo "<p>Cuando hay que enviar a la salida el resultado de una expresión pequeña (como una palabra), disponemos de la versión 
        abreviada de echo que permite intercalarse en el código HTML con menos esfuerzo y más legible.</p>";

        $tiene_portatil = true;

        ?> 

        <!-- Estamos en modo HTML aquí -->
        <p>Mi nombre es <?php echo $nombre ?> y estoy programando en PHP</p>
        <p>Mi nombre es <?= $nombre . " " . $apellidos ?> y estoy programando en PHP</p>

        <!-- Uso habitual de echo abrev. en los formularios -->
        <input type="text" size="30" name="nombre" id="nombre" value="<?=$nombre?>">
        <input type="checkbox" name="portatil" id="portatil" <?=$tiene_portatil ? "checked" : ""?>>
        
        <?php

        // K ocurre si tengo k enviar a ka salida codigo html con cadenas de caracteres? pos comillas simples dentro de las dobles

        echo "<input type='text' name='apellidos' id='apellidos' size='30'>";
        ?>

        <h4>Funciones print y printf</h4>

        <?php
        $pi = 3.14159;
        $radio = 3;
        $circunferencia = 2 * $pi * $radio;
        print "<p>la longitud de la  circunferencia de radio $radio es $circunferencia</p>";

        // La funcion printf permite dar salida con formato.

        printf("<br>La circunferencia de radio %d es %10.2f (con printf)", $radio, $circunferencia);

        ?>

        <br>
        &copy; El fran   
    </body>
</html>