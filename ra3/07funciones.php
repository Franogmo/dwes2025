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
          entonces se dispara la excepcion TypeError. Y si sí que puede hacer la conversión, continúa.
        </p>
        <p>Tipos de datos: int, float, boolean, string, callable (pa funciones almacenadas), object, 
          &lt;Clase&gt; (para clases), array</p>
        <p>Cada tipo puede ir precedido de ? indicando que se espera un arg de ese tipo o un valor nulo.</p>
        <pre>
          function areaRectangulo (float $base, float $altura) {
          $area = $base * $altura;
          return $area;
          };
        </pre>
        <?php 
        function areaRectangulo (float $base, float $altura) {
          $area = $base * $altura;
          return $area;
        };
        echo "<p>El área del rectángulo de base 8 y altura 5 es de " . areaRectangulo(8,5) . "</p>";
        echo "<p>El área del rectángulo de base '9' y altura 5 es de " . areaRectangulo("9", 4) . "</p>";
        echo "<p>El área del rectángulo de base 5 y altura '9zk' te da error </p>";
        ?>
        <pre>
          function areaRectangulo2 (float $base, float $altura): ?float {
          $area = $base * $altura;
          return $area;
          };
        </pre>
        <?php 
        function areaRectangulo2 (float $base, float $altura): ?float {
          if ($base < 0 || $altura < 0) {$area = null;}
          else {$area = $base * $altura;};
          return $area;
          };
          echo "<p>área del rectángulo con base negativa: ";
          $area = areaRectangulo2(-5, 8);
          echo $area ? $area : "El valor ha sido nulo";
          echo "</p>";
        ?>
        <h3>Parámetros con nombre (en la llamada)</h3>
        <p>Consiste en usar el nombre de un param en la invocación de la función. Esto supone:</p>
        <ul>
          <li>El valor del arg se pasa mediante una expresión de asignación sin el $ en la forma param : expr</li>
          <li>No es necesario respetar el orden de definicion de los params en la invocacion</li>
        </ul>
        <pre>$volumen = volumenCilindro(altura : 5, radio : 8);</pre>
        <?php 
        $volumen = volumenCilindro(radio : 8, altura : 5);
        echo "<p>(ORDEN RESPETADO) El volumen del cilindro de radio 8 y altura 5 es $volumen</p>";
        $volumen = volumenCilindro(altura : 5, radio : 8);
        echo "<p>(ORDEN NO RESPETADO) El volumen del cilindro de radio 8 y altura 5 es $volumen</p>";
        ?>
        <h3>Valor de devolución</h3>
        <p>Una función devolver varios resultados dentro de un array, y estos se pueden sacar en varias variables
          con la función list. (Ejemplo: función k devuelve área y perimetro de un circulo)
        </p>
        <pre>list($areaCirculo, $longCircunfe) = areaLongitudCircunfe(5);</pre>
        <h2>Ámbito de las variables</h2>
        <h3>Variables globales y cómo acceder a ellas</h3>
        <p>Se deben definir como globales. Se puede acceder a ellas con el array superglobal $GLOBALS</p>
        <p>Se pueden modificar dentro de una función</p>
        <h3>Variables estáticas</h3>
        <p>Se deben definir como estáticas. Están dentro de la función y conservan su valor</p>

        <?php 
        $a = 9;
        $b = 5;

        function suma() {
          global $a, $b;
          $suma = $a + $b;
          return $suma;
        };

        $suma = suma();
        echo "<p>la suma de $a + $b es $suma</p>";

        function suma2() {
          $suma = $GLOBALS['a'] + $GLOBALS['b'];
          return $suma;
        };

        $suma2 = suma2();
        echo "<p>la suma de $a + $b es $suma2</p>";

        function contadorEjecuciones() {
          static $contador = 1; // Las estáticas sólo se inicializan la primera vez k s usa la función.
          echo "<p>Esta función se ha usado $contador veces</p>";
          $contador++;
        };

        contadorEjecuciones();
        contadorEjecuciones();
        contadorEjecuciones();
        ?>

        <h2>Número indeterminado de parámetros</h2>
        <p>Se usa el operador de expansión ...</p>
        <p>Los argumentos adicionales se recogen en un array escalar.</p>
        <pre>
          function media (...$numeros) {
          $total = 0;
          foreach ($numeros as $num) {
            $total += $num;
          };
          return $total / count($numeros);
        };

        $n1 = 8;
        $n2 = 6;
        $n3 = 5;

        $mediaArit = ($n1, 8, $n2, 9, n3, 10);
        </pre>
        <?php 
        function media (...$numeros) {
          $total = 0;
          foreach ($numeros as $num) {
            $total += $num;
          };
          return $total / count($numeros);
        };

        $n1 = 8;
        $n2 = 6;
        $n3 = 5;

        $mediaArit = media($n1, 8, $n2, 9, $n3, 10);
        echo "<p>La media es $mediaArit</p>";
        ?>
        <h2>Recursividad</h2>
        <p>Cuando una función se invoca a sí misma, siempre dentro de una estructura de control.
          (o si no causa fallo porque sobrecarga el programa)
      </p>
        <?php 
        // n! = n * (n - 1)!
        // 4! = 4 * 3 * 2 * 1
        // Sólo para enteros positivos sin cero.
        function factorial ($n) {
          if ($n > 1) {
            $factorial = $n * factorial($n - 1);
          }
          else {return 1;};
          return $factorial;
        };

        $factorial = factorial(5);
        echo "<p>El factorial de 5 es $factorial</p>";
        ?>
        <h2>Funciones anónimas y funciones flecha</h2>
        <p>No tienen nombre. Se asignan a variables.</p>
        <pre></pre>
        <?php 
        $paraSumar = function ($a, $b) {return ($a + $b);};
        $resultado = $paraSumar(5, 8);
        ?>

        <h2>Funciones anónimas y funciones flecha</h2>
<p>Función anónima es aquella que no tiene nombre. Se emplean para construir una 
  expresión de función en la que la función se asigna a una variable. <br>
<p>Función flecha es una forma reducida de expresar una función anónima cuando solo 
  tiene una expresión como sentencia</p>
<?php
// Declarar una función anónima.
// Con la palabra clave function y sin nombre pero con paréntesis y lista de parámetros.

// Para argumentos de tipo callable

$suma = function($a, $b) {
  $suma = $a + $b;
  return $suma;
};

$resultado = $suma(5, 8);
echo "<p>El resultado de sumar 5 y 8 es $resultado</p>";

echo "<p>El tipo de la variable \$suma es "  . gettype($suma) . "</p>";

$nombre = function () {
  return "Juan";
};

function saludar($nombre) {
  echo "<p>¡Hola, $nombre! Me alegro de verte";
}

saludar($nombre());

$n1 = 8;
$n2 = 6;
$resta = function() use($n1, $n2) {
  echo "<p>La resta de $n1 y $n2 es " . ($n1 - $n2) . "</p>";
};

$resta();

// Función flecha
// Tipo especial de función anónima
// Sintaxis: fn(<parametros>) => <expresión>;


$doble = fn($numero) => $numero * 2;

$doble3 = $doble(3);
echo "<p>El doble de 3 es $doble3</p>";

// A diferencia de la función anónima, la función flecha siempre devuelve un valor y además
// será el de la expresión que contiene. 
// NO hay que usar use() para utilizar las variables definidas en el script.

$numero = 8;
$multiplo = fn($n) => $n * $numero;
$multiplo6 = $multiplo(6);
echo "<p>El múltiplo de 6 por $numero es $multiplo6</p>";

// El uso principal de las funciones fleca es como argumento callable en otras funciones.
// Ejemplo: función array_map()
$numeros = [ 3, 4, 5, 6, 7, 8];
$cuadrados = array_map( fn($x) => $x * $x , $numeros);
echo "<p>";
foreach( $cuadrados as $c ) {
  echo "$c ";
}
echo "</p>";

/* Lo anterior equivale a esto
$cuadrados = [];
foreach($numeros as $n) {
  $cuadrados[] = $n * $n;
}
*/

// Otro ejemplo: función array_filter()
$numeros = [ 3, 4, 5, 6, 7, 8];
$mayores5 = array_filter($numeros, fn($x) => $x > 5);
echo "<p>";
foreach($mayores5 as $m5) {
  echo "$m5 ";
}
echo "</p>";

// Otro ejemplo con una función anónima
$numeros = [ 9, -3, 5, 6, -1, -8];
$positivos = array_filter($numeros, function($n) {
  if( $n > 0 ) return true;
  else return false;

  //return $n > 0;
});

echo "<p>";
foreach($positivos as $p) {
  echo "$p ";
}
echo "</p>";
?>


        <p>ẃéŕýúíóṕáśǵj́ḱĺźćǘńḿ.</p>
    </body>
</html>