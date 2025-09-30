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
        <h3>Función empty</h3>
        <p>Devuelve true si la variable está vacía</p>
        <p>Devuelve true si contiene valores nulos o falsos (como la cadena vacía)</p>
        <p>Lanza error si le introduces una variable sin definir.</p>
        <h3>Función isset</h3>
        <p>Devuelve true si la variable no existe, no está definida O contiene un valor null.</p>
        <h2>Funciones que valoran el tipo de dato<h2>
        <p>is_bool(), is_int(), is_float(), is_string(), is_array()</p>
        <h2>Constantes</h2>
        <p>Valor con nombre, que no puede alterarse después de ser asignado. Se suelen escribir en mayúsculas y no se pueden interpolar.</p>
        <p>Se pueden asignar mediante la función define() --\> define("PI", 3.1416); </p>
        <p>Se pueden asignar mediante la palabra clave const --\>  const PI = 3.1416;</p>
        <p>Una constante sólo se puede usar en un script.</p>
        <p>PHP tiene CONSTANTES PREDEFINIDAS (Llamadas constantes mágicas):</p>
        <ul>
            <li>__LINE__ dice la línea de código en la que estamos</li>
            <li>__FILE__ dice la ruta  completa en el que está este archivo</li>
            <li>__DIR__ dice la ruta completa del DIRECTORIO en el que está el archivo, pero sin incluir el archivo.</li>
            <li>Se usan mucho para detectar excepciones alzadas a mano, y para testeo en general.</li>
        </ul>

    </body>
</html>