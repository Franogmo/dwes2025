<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>tercer script en php. tipos de datos</title>
    </head>
    <body>
        <h1>Tercer script en php. tipos de datos</h1>
        <h2>Tipos de datos escalares o primitivos</h2>
        <p>booleanos, numéricos enteros, numéricos flotantes, cadenas de caracteres</p>
        <h3>Booleanos</h3>
        <p>Valores que pueden ser false: 0, -0, 0.0, -0.0. Cadena vacía. Arrays vacíos, null, variables no definidas/p>
        <p>Valores que pueden ser true: cualquier número que no sea 0. Cualquier cadena menos la vacía. arrays con algo dentro (lo que sea) </p>
        <p>Los transformadores a cadena transforman los valores booleanos en 0 (false) y 1 (true). Se puede usar el 0 como sinónimo de 
             False y cualquier número como sinónimo de true.</p><br>
        <h3>Enteros</h3>
        <p>Son de 32 bits. Pueden expresarse con otras notaciones (decimal, binario, octal, hexadecimal). Admite negativos.</p>
        <p>0número para representar octales, 0xnúmero para hexadecimales, 0bnúmero para binarios</p>
        <p>Los números enteros se guardan en memoria en decimal, aunque estén expresados en otras notaciones. Para expresarlos en otras 
            notaciones están las funciones dec(...)().
        </p>
        
        <?php 
        $numero_octal= 0120;
        echo "<p>El número octal 120 es $numero_octal en decimal.</p>";
        echo "<p>Gracias a la función decoct() puedo mostrar el número " . decoct($numero_octal) . " en octal.</p>";
        $numero_hexadecimal= 0xAB9C;
        echo "<p>El número hexadecimal AB9C es $numero_hexadecimal en decimal.</p>";
        echo "<p>Gracias a la función dechex() puedo mostrar el número " . dechex($numero_hexadecimal) . " en hexadecimal.</p>";
        $numero_binario= 0b10101010;
        echo "<p>El número binario 10101010 es $numero_binario en decimal.</p>";
        echo "<p>Gracias a la función decbin() puedo mostrar el número " . decbin($numero_binario) . " en binario.</p>";
        echo "<p>El número binario $numero_binario es '" . dechex($numero_binario) . "' en hexadecimal</p>";
        ?>
        
        <br>
        <h3>Flotantes</h3>
        <p>Van con punto y no con coma. La función round() redondea a los decimales que se le digan, 
            floor() redondea al valor entero por defecto, ceil() redondea a enteros por exceso</p>
        <p>Acepta notación científica.</p>
        <?php 
        $inf_int = 7.9e13;
        echo "<p>Por internet circulan a diario $inf_int mb</p>";
        $tamanno_virus = 0.2e-9;
        echo "<p>El tamaño de un virus es de $tamanno_virus mb</p>";
        ?>
        <br>
        <h3>Cadenas</h3>
        <p>PHP es puramente ASCII, lo que indica que sólo admite 256 caracteres y que cada uno ocupa 1 byte.</p>
        <p>Para expresar cadenas se pueden usar comillas dobles, comillas simples, cadenas Heredoc y cadenas Nowdoc.</p>
        <p>Las cadenas con comillas simples no reconocen ningún caracter de escape salvo \ (la barra invertida). 
            Y además no nos deja meter variables dentro. Se pueden poner dentro de una cadena entre comillas dobles y formarán parte de esta.</p>
            <?= '<p>El mejor pub irlandés es el O\'Donnel. La raíz del disco duro en Windows es C:\\. Y aquí vemos
            cómo NO llama a $numero_octal'?>
        <h4>Cadenas Heredoc</h4>
        <p>Es una cadena muy larga, incluyendo saltos de línea que se respetan, que comienza por <<< y un identificador (generalmente en mayúsculas). 
    Justo después hay un salto de ñinea y se escribe la cadena, con saltos de línea que sean necesarios, con interpolaciones de variables y caracteres
 de escape. Para finalizar la cadena se hace un salto de línea y se vuelve a poner el mismo identificador.</p>
        <?php 
        $var = 3;
        $cadena_hd = <<<CADENA
        Esto es una cadena
        Heredoc que respeta los 
        saltos de línea, le puedo
        poner variables como $numero_octal y
        además secuencias de escape. El 
        identificado no necesita \$ y tampoco
        usamos \", simplemente la escribimos y
        acabamos con un salto de línea más
        el identificador</p>
        CADENA;
        
        $tabla = <<<TABLE
        <table>
            <tr>
                <td>A</td>
                <td>B</td>
                <td>A</td>
                <td>B</td>
            </tr>
        </table>
        TABLE;
        echo $cadena_hd . $tabla ;
        ?>
        <h4>Nowdoc</h4>
        <p>Como las heredoc pero con comillas simples. Mismas restricciones que en las cadenas con comillas simples.</p>
        <br>
        <h2>Conversión de tipos</h2>
        <p>Implícitas (se hacen automáticamente) y explicitas (las haces tú a mano).</p>
        <p>(int)$variable para convertir a entero. Deshecha la parte decimal de los flotantes. Ignora los espacios al principio de las cadenas. 
            Devuelve 0 si no consigue convertir cadenas.
        </p>
        <p>(float)$variable para convertir a flotante. No altera las notaciones científicas con potencias negativas.</p>
        <p>La función gettype() sirve para saber el tipo de una variable.</p>
        <br>
        <h2>Tipos de datos compuestos</h2>
        <p>arrays, objetos, funciones de retrollamada/tipos callable (funciones), iterables</p>
        <h2>Tipos especiales</h2>
        <p>Null, resource</p>
    </body>

<?php ?>
</html>