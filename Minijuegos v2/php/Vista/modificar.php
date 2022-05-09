<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modificar Minijuego</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <body>
    <!--Div de la barra de navegacion con sus respectivas lineas-->
    <div id="barraNavegacion">
      <ul>
        <li><a href="../../index.html">Inicio</a></li>
        <li><a href="../Controlador/controlador.php?click=alta">Alta de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=lista">Lista de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=listaSelect">Lista Select</a></li>
        <li><a href="../Controlador/controlador.php?click=listaCheckbox">Lista Checkbox</a></li>
      </ul>
    </div>
    <form method="post" id="formularioModificar">
      <!--<label for="nombre">Nombre del Minijuego: </label>
      <input type="text" name="nombre"><br><br>
      <label for="icono">Ruta Icono del Minijuego: </label>
      <input type="text" name="icono"><br><br>
      <label for="ruta">Ruta del Minijuego: </label>
      <input type="text" name="ruta"><br><br>
      <input type="submit" name="submit" value="Enviar">-->

      <?php
          require_once('../Controlador/controlador.php');
          $controlador = new Controlador;
          $controlador->modificar();
          $filaMod = mysql_fetch_array($controlador -> filaMod);
          /*echo "<label for='nombre'>Nombre del Minijuego: </label>
                <input type='text' name='nombre' value='".$filaMod['nombre']."'><br><br>
                <label for='icono'>Ruta Icono del Minijuego: </label>
                <input type='text' name='icono' value='".$indice['icono']."'><br><br>
                <label for='ruta'>Ruta del Minijuego: </label>
                <input type='text' name='ruta' value='".$indice['ruta']."'><br><br>
          ";*/
          echo "<script>alert(".$filaMod.")</script>";
                echo $filaMod['nombre'];

      ?>
     </form>
  </body>
</html>
