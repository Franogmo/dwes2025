<?php  // COGER DEL GIT
require_once($_SERVER['DOCUMENT_ROOT'] . "/include/funciones.php");

/* 
Sanear -> Eliminar de las entradas de $_POST o $_GET cualquier caracter no deseao y k
puede provocar problemas: < > & "

Validar -> Grantizar k el dato es una entrada $_POST y $_GET es conforme a formato y
lógica de negocio (no meter números de telefono en la sección apellidos, o
meter fechas de pasado en una sección que se llame "fecha cita" por ejemplo)

- htmlspecialchars() -> pa sanear. Quita los caracteres especiales html
- filter_input() y filter_input_array() -> Sanean y validan (solo formato, no llgica de negocio).
Se aplican a $_post, $_get, cookie, server
- filter_var() y filter_var_array() -> como los anteriores pero pa cualquier variable
 */

inicioHtml("Sanear y validar datos de form", []);
ob_start();

$patologias = [
  'os' => 'osteoporosis',
  'di' => 'diabetes',
  'co' => 'colesterol',
  'an' => 'anemia',
  'ar' => 'aterosclerosis'
];
if( $_SERVER['REQUEST_METHOD'] == "POST"){?>
  <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
    <fieldset>
      <legend>Introducir los datos</legend>
      <label name="dni">Dni</label>
      <input type="text" name="dni" id="dni" size="10"><!--pattern="--> 
      <label for="nombre">Nombre completo</label>
      <input type="text" name="nombre" id="nombre" size="40"> 
      <label for="clave">Clave</label>
      <input type="password" name="clave" id="clave" size="10"> 
      <label for="suscripcion">Suscripcion</label>
      <input type="checkbox" name="suscripcion" id="suscripcion" value="Si"> 
      <label for="sitio">Web personal</label>
      <input type="text" name="sitio" id="sitio" size="50"> 
      <label for="peso">peso</label>
      <input type="text" name="peso" id="peso" size="5"> 
      <label for="edad">Edad (18-65)</label>
      <input type="text" name="edad" id="edad" size="4"> 
      <label for="patologias">patologias previas</label>
      <select name="patologias[]" id="patologias" size="5" multiple>
        <option value="os">Osteoporosis</option>
        <option value="os"></option>

    </fieldset>
  <?php
    foreach($patologias as $clave => $valor) {
      echo "<option value='{$clave}'>";
}
}
if( $_SERVER['REQUEST_METHOD'] == "GET"){?>
  <?php
}

finHtml();
ob_flush();
?>