<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>cuarto script en php. tipos de variables</title>
    </head>
    <body>
        <h1>Variables</h1>
        <p>Se asignan así -- $variable = valor; </p>
        <p>Se pueden crear variables sin asignar. Estas contienen undefined.</p>
        <p>Undefined equivale a 0 pasado a número y a "" pasado a cadena.</p>
        <h2>Análisis de variables</h2>
        <h3>Simple</h3>
        <p>Consiste en introducir una variable en una cadena con " o heredoc para incrustar su valor dentro de la cadena</p>

        <?php 
        $num = 5;
        echo "<p>Variable num interpolada: $num</p>";
        ?>
        <h3>complejo</h3>
        <p>Para evitar ambiguedades en el uso de variables dentro de cadenas, se las mete entre llaves</p>
        <?php 
        $calle = "Trafalgar Sq";
        $numero = 5;
        $poblacion = "London";
        $distrito = 5000;
        echo "Mi dirección en Londres es {$numero}th, $calle $poblacion $distrito";
        ?>
        <h2>Funciones entre variables</h2>
        <p>La función gettype() devuelve el tipo de la variable en forma de cadena.</p>
        <?php 
        $resultado = 10;
        $nombre = "Parraco";
        echo "<p>El tipo de datos de $resultado es " . gettype($resultado) . "</p>";
        echo "<p>El tipo de datos de $nombre es " . gettype($nombre) . "</p>";
        ?>
        <p>Debería salir </p>

    </body>
</html>