<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>segundo script en php. Elementos del lenguaje.</title>
    </head>
    <body>
        <h1>Segundo script en php. Elementos del lenguaje.</h1>
        <h2>Entrada y salida</h2>
        <p>La entrada de datos en php es con un formulario o enlace.La salida siempre se produce con la función echo, y su forma abreviada, 
            y la función print.</p>
        <p>Además tenemos la función printf para salida con formato.</p>
        <h3>Función echo</h3>
        <?php 
        echo "<p>La función echo emite el resultado de una expresión a la salida (del servidor al cliente web). Se puede usar como función 
        o como construcción del lenguaje (o sea, sin paréntesis)</p>";
        echo "<p>Esto es un párrafo HTML enviado con echo.</p>";

        $nombre = "Juan";
        echo "<p>Hola, $nombre, ¿cómo estás?</p>"
        ?> 
        &copy; El fran
    </body>
</html>