<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alta Minijuegos</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <body>
    <!--Div de la barra de navegacion con sus respectivas lineas-->
    <div id="barraNavegacion">
      <ul>
        <li><a href="../../index.html">Inicio</a></li>
        <li>Alta de Minijuegos</li>
        <li><a href="../Controlador/controlador.php?click=lista">Lista de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=listaSelect">Lista Select</a></li>
        <li><a href="../Controlador/controlador.php?click=listaCheckbox">Lista Checkbox</a></li>
      </ul>
    </div>

    <!-- Formulario de alta de minijuegos -->
    <form method="post" id="formularioAlta">
      <label for="nombre">Nombre del Minijuego: </label>
      <input type="text" name="nombre"><br><br>
      <label for="icono">Ruta Icono del Minijuego: </label>
      <input type="text" name="icono"><br><br>
      <label for="ruta">Ruta del Minijuego: </label>
      <input type="text" name="ruta"><br><br>
      <input type="submit" name="submit" value="Enviar" id="botonEnviarAlta">

      <?php
      //Si se ha pulsado el boton submit asegura que han sido rellenados el nombre y ruta, sino da error
        if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
            if(empty($_POST['nombre']) || empty($_POST['ruta']))
              echo '<br><div class="divError">ERROR, tienes que rellenar todos los campos</div>';
            else {
              echo '<br><div class="divCorrecto"> Datos Introducidos con Exito </div>';
            }
        }
       ?>
     </form>
  </body>
</html>
