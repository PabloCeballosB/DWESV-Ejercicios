<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alta Minijuegos</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <body>
    <div id="barraNavegacion">
      <ul>
        <li><a href="../../index.html">Inicio</a></li>
        <li>Alta de Minijuegos</li>
        <li><a href="php/Controlador/controlador.php?click=lista">Lista de Minijuegos</a></li>
      </ul>
    </div>
    <form method="post" id="formularioAlta">
      <label for="nombre">Nombre del Minijuego: </label>
      <input type="text" name="nombre"><br><br>
      <label for="icono">Ruta Icono del Minijuego: </label>
      <input type="text" name="icono"><br><br>
      <label for="ruta">Ruta del Minijuego: </label>
      <input type="text" name="ruta"><br><br>
      <input type="submit" name="submit" value="Enviar">

      <?php
        if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
            if(empty($_POST['nombre']) && empty($_POST['ruta']))
              echo '<br><div class="divError">ERROR, tienes que rellenar todos los campos</div>';
            else {
              echo '<br><div> Datos Introducidos con Exito </div>';
            }
        }


       ?>
     </form>
  </body>
</html>
