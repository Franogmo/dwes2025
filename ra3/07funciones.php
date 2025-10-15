<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>octavo script en php. Funciones</title>
    </head>
    <body>
      <h1>funciones</h1>
        <h2>Internas</h2>
        <p>Propias de php</p>
        <h2>Métodos</h2>
        <p>Funciones definidas dentro de una clase de objeto</p>
        <h2>De usuario</h2>
        <p>Las define el usuario</p>
        <h3>Definición de una función</h3>
        <p>Antes de utilizar una función hay que definirla. En su definición se indica nombre de la función.
            Conjunto de parametros o argumentos. Sentencias de la función incluyendo el return.
        </p>
        <pre>Sintaxis function nombreFuncion(param1, param2...){
            sentencias; 
            return (acción);
        }
        </pre> 
        <h3>Paso de prámetros</h3>
        <p>Parámetro formal: son variables. Se les llama parámetros</p>
        <p>Parámetro real: El que se introduce cuando se llama a la función. 
            Puede ser una expresión de cualquier tipo. Se les llama argumentos.</p>
        <?php
        define("PI", 3.14); 
        function areaTriangulo($base, $altura) {
            $area = ($base * $altura) / 2;
            return $area;
        };

        ?>
        <p>Y las invocamos así:</p>
        <p>
            <?php 
            $areaTri = areaTriangulo(5, 4);
            echo "El área del triángulo de base 5 y altura 4 es de $areaTri";
            ?>
        </p>
        <h2>Paso de parámetros por valor y por referencia</h2>
        <p>Paso de parám. por valor -> El argumenti en la llamada de la función se copia eb el 
            prámetro de la función. SON DOS VARIABLES DISTINTAS, CADA UNA CON SU VALOR. Al terminar la función el 
            parámetro desaparece y el arg permanece. 
        </p>
        <pre>function nombreFunc($par1, $par2, $par3){
            sentencias
            return
            } 
        </pre>
        <p>nombreFunc($arg1, $arg2, $arg3); arg1 pasaría a ser parám1 dentro de la función, arg2 -> parám2 y así 
            sucesivamente.
        </p>
        <p>Hay que tener cuidado con el ámbito de las variables (local y global)</p>
        <p>Paso por referencia -> El arg que se pasa en la invocación de la función es una REFERENCIA
            a una variable (dirección de memoria). Por tanto, sólo hay una única variable entre el argumento y su 
            correspondiente parámetro. De ahí qie si dentro de la función se modifica el parám, el nuevo valor
            es visible en el script principal.
        </p>
        <?php 
        function areaPentagono(&$perimetro, &$apotema) {
          echo "<p>funcion areaPentagono: Valores de perímetro y apotema son $perimetro - $apotema </p>";
            $area = $perimetro * $apotema / 2;
            $perimetro = 50;
            $apotema = 8;
            echo "<p>funcion areaPentagono: Valores de perímetro y apotema son $perimetro - $apotema </p>";
            return $area;
        }
        $p = 30;
        $a = 5;
        echo "<p>Script principal: Valores de perímetro y apotema son $p - $a </p>";
        $area = areaPentagono($p, $a);
        echo "<p>Script principal: Valores de perímetro y apotema son $p - $a </p>";
        echo "<p>Script principal tras la función: Valores de perímetro y apotema son $p - $a </p>";
        ?>
        <p>Los objetos se pasan siempre por referencia, aunque no haga falta añadir el ampersand & en 
          los parámetros de la función cuando la definimos.</p>
        <?php 
        function duplicaValores(&$array){
          for($i=0; $i< count($array); $i++) {
            $array[$i] = $array[$i] * 2;
          }
        };
        $numeros = [5, 4, 3, 2, 1, 0];
        echo "<p>Array fuera de la función: <br>";
        foreach($numeros as $n) echo "$n<br>";
        duplicaValores($numeros);
        foreach($numeros as $n) echo "$n<br>";
        echo "</p>";
        ?>
        <h2>Praámetros por defecto</h2>
        <p>Si no se le pasa un argumento, el valor del arg será el descrito en la definición de la función</p>
        <pre>
          function volumenCilindro($radio, $altura = 10) {
          $volumen = $radio ** 2 * PI * $altura;
          return $volumen;
        }
        </pre>
        <?php 
        function volumenCilindro($radio, $altura = 10) {
          $volumen = $radio ** 2 * PI * $altura;
          return $volumen;
        }
        $volumen = volumenCilindro(5);
        echo "<p>VolumenCilindro = $volumen cm<sup>3</sup></p>";
        $volumen = volumenCilindro(3, 11);
        echo "<p>VolumenCilindro = $volumen cm<sup>3</sup></p>";
        ?>
        <h2>Tipos de datos en los params y valor de devolución de la función <br>
        (Tipado fuerte)</h2>
        <p>Puedo indicar un tipo de datos a cada param en la definicion de la funcion. Al invocar 
          la función se intenta convertir el arg al tipo indicado para el param y si no puede 
          entonces se dispara la excepcion TypeError. Y si sí puede hacer la conversión, continúa.
        </p>
        <p>Tipos de datos: int, float, boolean, string, callable (pa funciones almacenadas), object, 
          &lt;Clase&gt; (para clases), array</p>
        <p>Cada tipo puede ir precedido de ? indicando que se espera un arg de ese tipo o un valor nulo.</p>

        <p>ẃéŕýúíóṕáśǵj́ḱĺźćǘńḿ</p>
    </body>
</html>