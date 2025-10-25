<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>séptimo script en php. Arrays</title>
    </head>
    <body>
        <h1>Arrays</h1>
        <p>[elemento1, elemento2, etc]. Los elementos de cada uno son interpolables.</p>
        <p>De dos tipos</p>
        <ul>
            <li>Escalares: cada elemento se identifica por un número, en orden, empezando por el 0.</li>
            <li>Asociativos: cada elemento se identifica con una cadena. Se asemejan a los diccionarios de python</li>
            <li>Mixtos: Combinación de los dos anteriores.</li>
        </ul>
        <h2>Definir arrays</h2>
        <p>Con la función Array(). $notasdeclase = Array(6, 10, 10, 10, 10);</p>
        <p>Con corchetes. $notasdeclase = [6, 10, 10, 10, 10];</p>
        <p>Podemos asignar también valores al índice que queramos. $notas = Array(2 => 8.5, 4 => 4.75, 8 => 10);. Todos los elementos vacíos entre un 
            índice ocupado y otro se quedan como undefined.</p>
        <h2>Borrado de elementos</h2>
        <p>Para hacerlo se usa la función unset(), que elimina variables.</p>
        <p>unset($notas[4]);</p>
        <p>(Recordemos que isset() es la función que nos dice si una variable existe o si contiene undefined)</p>
        <h2>Añadir un elemento al final del array</h2>
        <p>$notas[] = elementonuevo;</p>
        <h2>Asociativos</h2>
        <p>$alumno['nombre'] = "Juan Gómez"; </p>
        <p>(Esta manera de crear el array al mismo tiempo que se asigna manualmente el primer elemento se 
            puede hacer también con los arrays escalares. Si empiezas por la posición 1 (por ejemplo) sigues dejando la posición 0 vacía e indefinida.)</p>
        <h2>Arrays bidimensionales</h2>
        <p>Arrays en el que todos sus elementos son arrays.</p>
        <p>Se buscan elementos concretos dentro de estos con 2 corchetes.</p> 
        <p>$tablafutbolistas[1]['nombre'];  Buscaría el nombre del segundo futbolista.</p>
        <p>borrar<p>
        <h2>Tipos de bucle para recorrer un array</h2>
        <p>For tradicional (no se usa apenas)</p>
        <p>while (especialmente para arrays escalares)</p>
        <h3>Bucle foreach</h3>
        <p>foreach($array as [$clave => SI queremos acceder a la clave] $valor)</p>
        <?php 
        $numeros = [1, 3, 8];
        echo "<p><br>";
        foreach ($numeros as $numero) {
            echo "Elemento es $numero<br>";
        };
        $alumno['nombre'] = "Juan";
        $alumno['apellido'] = "Sánchez";
        $alumno[0] = 6;
        $alumno[1] = 9;
        $alumno[2] = 10;
        $alumno['media'] = 8.25;

        foreach($alumno as $clave => $valor) {
            echo "Elemento con clave $clave y valor $valor <br>";
        };

        $componentes['cpu'] = "i7 Ultra 13th";
        $componentes['mt'] = "Asus H81M2";
        $componentes['ram'] = "Kingston DDR4 3200Mhz 16GB";
        $componentes['sdd'] = "Samsung EVO 950 1 TB Nvme m.2";
        $componentes['caja'] = "Caja con fuente 700w";
        $componentes['monitor'] = "Monitor UHD 4K 23\"";
        foreach($componentes as $componente) {
            echo "El ordenador de Johnny tiene $componente<br>";
        };
        echo "</p>";
        ?>
        <h2>Funciones para arrays</h2>
        <p>array_key_exists(clave, array) = Devuelve true si existe una clave dada en un array dado</p>
        <p>array_search() = Searches the array for a given value and returns the first corresponding key if successful</p>
    </body>
</html>