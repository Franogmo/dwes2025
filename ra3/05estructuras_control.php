<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>sexto script en php. Estructuras de control</title>
    </head>
    <body>
        <h1>Estructuras de control</h1>
        <p>Las sentencias terminan con ; y se pueden agrupar varias en una misma línea.</p>
        <p>Tb se pueden agrupar en un bloque de sentencias delimitado entre claves {}, pero no tiene apenas sentido hacer esto fuera de una estructura
             de control
        </p>
        <h2>Condicional simple</h2>
        <p> if (condición) {acción} else {acción};</p>
        <p>Se puede hacer sin identar pero queda menos legible. Tb se puede hacer sin claves, pero sólo si la acción está después del if
             o el else.
        </p>
        <p>Se puede poner codigo html a lo bruto y cerrar php dentro de unas claves</p>
        <?php

use function PHPSTORM_META\map;

        $tipoCarnet = "C1";
        if ($tipoCarnet === "C1") 
            echo <<<CARNETB1
            <h4>Documentación para solicitar la tarjeta de transporte</h4>
            <ul>
                <li>Fotocopia del carnet de conducir</li>
                <li>certificado de penasles</li>
                <li>Carnet B2</li>
            </ul>
            CARNETB1;

        ?>
        <p>Se pueden meter ifs dentro de otros.</p>
        <?php 

        
        $nota = 6.5;
        if ($nota >= 0 && $nota < 5) {
            echo "SUSPENSO";
        }
        else {
            if ($nota < 6 ) {
                echo "SUFICIENTE";
            }
            else {
                if ($nota < 7) {
                    echo "BIEN";
                }
                else {
                    if ($nota < 9) {
                        echo "NOTABLE";
                    }
                    else {
                        if ($nota) {
                            echo "Sobresaliente";
                        }
                        else {echo "Error";}
                    }
                }
            }
        };
        
        echo "<p>PHP también tiene else ifs (pero no elifs)</p>";

        if ($nota >= 0 && $nota < 5) {echo "SUSPENSO";}
        else if ($nota < 6) {echo "SUFICIENTE";}
        else if ($nota < 7) {echo "BIEN";}
        else if ($nota < 9) {echo "NOTABLE";}
        else if ($nota <= 10) {echo "SOBRESALIENTE";}
        else {echo "ERROR";};

        $nota2 = 8;

        echo "<p>y switch cases.</p>";

        echo "<p>este man tiene un ";

        switch ($nota2) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4: 
                echo "Suspenso"; break;
            case 5: echo "Aprobado"; break;
            case 6: echo "Bien"; break;
            case 7:
            case 8:
                echo "Notable"; break;
            case 9:
            case 10:
                echo "Sobresaliente"; break;
            default: echo "¿Qué?";
        }
        echo "</p>";
        ?>
        <h3>Expresión match</h3>
        <p>$resultado = match(valor) {valor1 => accion, valor2 => accion, ..., default => accion}; El default siempre es opcional.<p>
        <?php 
        $calificacion = match($nota2) {
            0, 1, 2, 3, 4 => "SUSpenso",
            5 => "SUficiente",
            6 => "BIen",
            7, 8 => "NOtable",
            9, 10 => "SObresaliente",
            default => "Errorsaco" 
        };

        echo "<p> Tienes un $calificacion </p>";
        
        ?>
        <h3>Operador ternario</h3>
        <p>condición ? accion si true : accion si false;</p>
        <p>Es básicamente un if-else cortito.</p>
        <h3>Operador de fusión de null</h3>
        <p>$resultado = $metodo ?? $metodo2 ?? $defaultmethod;</p>
        <p>Comprueba todos los valores asignables uno a uno hasta que alguno NO esté nulo. Si están todos nulos, asigna el último.
        <?php 
        $metodo = "POST";
        $metodo2 = "GET";
        $defaultmethod = "main";

        $resultado = $metodo ?? $metodo2 ?? $defaultmethod;
        echo "<p>El resultado es $resultado</p>";
        ?>
        <h2>Bucles</h2>
        <p>For con contador, for para colecciones de datos (for each), while, do while, sentencias break y continue</p>
        <h3>Bucle for con contador</h3>
        <p>Es como el de JS</p>
        <p>Se puede hacer hacia atrás usando el decremento ($i--)</p>
        <p>for ($i=10 , $j = 0; $i >= 5 && $j < 8; $i--, $j++) es un for válido<p>
        <?php 
        $num = 4;
        echo "<p>La tabla de multiplicar del $num: <br>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$num x $i = " . ($num * $i) . "<br>";
        };
        echo "</p>";
        ?>
        <h3>Bucle while</h3>
        <p>while (condicion) {accion};</p>
        <h5>rand(minimo inclusive, máximo inclusive);<h5>
        <h3>Do while</h3>
        <p>do {accion} while (condición);</p>
        <h3>Sentencias break y continue</h3>
        <p>Break se sale del bucle directamente</p>
        <p>Continue se sale de la iteración pero, si sigue dándose la condición, continúa dentro del bucle.</p>
        <p>Cuando hay bucles anidados, break admite un argumento numérico entero que indica de qué bucle se sale</p>
        <?php 
        
        echo "<p>";
        for($i = 0; $i < 200 ; $i++) {
            $numero = rand(1,1000);
            $primos = 0;
            echo "Se ha generado el numero $numero";
            for($j = 1; $j <= $numero; $j++) {
                $raiz = intval($j ** 0.5);
                while($raiz > 1) {
                    if ($numero % $raiz === 0) {break;};
                    $raiz--;
                };
                if ($raiz === 1) {
                    $primos++;
                    echo "El número $j es primo<br>";
                    echo "Encontrados $primos numeros primos<br>";
                };
                if ($primos > 10) {break 2;};
            };
        };
        echo "</p>";
        ?>
        <h4>Continue</h4>
        <?php 
        echo "<p>";
        $num2 = rand(0,20);
        /*
        CORREGIR LUEGO. DA BUCLE INFINITO

        $impares = 0;
        $multiplos3 = 0;
        while ($num2) {
            echo "El numero generado es $num2";
            if ($num2 % 3 == 0) {$multiplos3++; rand(0,20); continue;};
            if ($num2 % 2 == 0) {$impares++;};
            $num2 = rand(0,20);
        };
        echo "Se han generado $multiplos3 múltiplos de 3 y $impares impares";
        */
        
        echo "</p>";
        ?>
        <h3>Bucle foreach</h3>
        <p>Se da luego</p>
    </body>
</html>