// Cambiar esto 

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="estilos/formulario.css">
        <title>decimo script en php. Formulario</title>
    </head>
    <body>
      <p>Array EGPCS (Environment, GET, POST, Cookies, Server</p>
      <p>Son arrays superglobales accesibles desde cualquier script y cualquier función. Sus valores son 
        mantenidos automáticamente por PHP, por tanto son de solo lectura
      </p>
      <p>$_ENV: Variables de entorno, depende del sistema operativo.</p>
      <p>echo $HOME, echo $SHELL, echo $PATH</p>
      <p>$_GET: Datos enviados en una petición GET</p>
      <p>$_POST: Datos enviados en una petición POST</p>
      <p>$_COOKIE: Cookies entre el cliente y el servidor</p>
      <p>$_REQUEST: Contiene los datos en $_GET, $_POST y $_COOKIE. No se recomienda usarlo.</p>
      <p>$_SERVER: contiene información del propio servidor web</p>
      <h2>Métodos HTTP</h2>
      <p>GET -- Envía los datos en la URL de la petición</p>
      <p>POST -- Envía los datos en el cuerpo de la petición</p>

      <h1>Proceso de formularios</h1>
      <h2>Diferencias entre GET y POST</h2>
      <p>POST ra3/09respuesta.php HTTP1.1 (línea de petición)</p>
      <p>Host: dwes.com</p>
      <p>Accept-language: es</p>
      <p>Accept-content: text/html</p>
      <p>User-agent: Mozilla</p> 
      <p>.....</p>
      <p>(Línea en blanco)</p>
      <p>name=Juan+Perez&email=si@lol.com (Cuerpo de la petición)</p>
      <p>Las peticiones GET son idempotentess -> 2 peticiones iguales producen la mism respuesta. 
        Por tanto, los navegadores pueden cachear una respuesta a una petición GET y, si se hace la mismaa
        petición, se devuelve la respuesta cacheada sin enviar la petición al servidor.
      </p>
      <p>Las POST no son idempotentes y no deben cachearse.</p>
      <form method="GET" action="09respuesta.php">
        <fieldset>
          <legend>Solicitud de empleo</legend>
          <label>Nombre completo</label>
          <input type="text" name="nombre" id="nombre" size="50" placeholder="Escribe tu nombre completo" required>
          <label>Email</label>
          <input type="email" name="email" id="email" size="30">
        </fieldset>
        <input type="submit" name="operacion" value="Enviar">
      </form>
      <form method="POST" action="09respuesta.php">
        <fieldset>
          <legend>Solicitud de empleo</legend>
          <label>Nombre completo</label>
          <input for="nombre" type="text" name="nombre" id="nombre" size="50" placeholder="Escribe tu nombre completo" required>
          <label>Email</label>
          <input type="email" name="email" id="email" size="30">
          <label>Clave</label>
          <input type="password" name="clave" size="10">
          <label for="linkedin">Linkedin</label>
          <input type="url" name="linkedin" size="10">
        </fieldset>
        <input type="submit" name="operacion" value="Enviar">
      </form>
      <?php ?>
    </body>
</html>