<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>quinto script en php. operadores y expresiones</title>
    </head>
    <body>
        <h1>Expresiones, operadores y operandos</h1>
        <p>Una expresión es una combinación de operandos y operadores que arroja un resultado, tiene un tipo de datos, que depende
            del tipo de datos de sus operandos y de la operación realizada.
        </p>
        <p>Un operador es un símbolo que denota una operación.</p>
        <p>Pueden ser:</p>
        <ul>
            <li>Unarios: Sólo necesitan un operando</li>
            <li>Binarios: Necesitan 2</li>
            <li>Ternarios: usan 3</li>
        </ul>
        <h2>Operadores</h2>
        <h3>De asignación</h3>
        <p> = </p>
        <h4>De asignación aumentada</h4>
        <p>++ Incremento, -- Decremento, y las operaciones con asignación (+=, -=, *=, /=, %=)</p>
        <p>El preincremento (++$variable) incrementa el valor de la variable y luego lo devuelve. El posincremento ($variable++) hace lo contrario</p>
        <h3>Aritméticos</h3>
        <p>+,-,*,/,%,** (Los de siempre, vaya)</p>
        <p>+ convierte cadenas a enteros (y si tienen letras alza advertencia) y - multiplica por -1</p>
        <h3>relacionales</h3>
        <p>(==, ===, !=, !==, <, >, <=, >=). Los comparadores de mayor y menor pueden comparar cadenas por el orden ASCII aumentado.</p>
        <p><=> ("Nave espacial") detecta si el operando 1 es menor, mayor o igual que el operando 2. Devuelve -1 si es menor, 0 si es igual y
        1 si es mayor.</p>
        <p></p>
        <?php 
        $n1 = 5;
        $cadena = 5;
        $n2 = 8;
        $resultado  = $n1 <=> $n2;

        echo "<p>El resultado es $resultado</p>";
        ?>
    </body>
</html>