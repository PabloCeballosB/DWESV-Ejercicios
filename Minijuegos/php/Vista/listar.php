<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listar Minijuegos</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <body>
    <!--Div de la barra de navegacion con sus respectivas lineas-->
    <div id="barraNavegacion">
      <ul>
        <li><a href="../../index.html">Inicio</a></li>
        <li><a href="../Controlador/controlador.php?click=alta">Alta de Minijuegos</a></li>
        <li>Lista de Minijuegos</li>
        <li><a href="../Controlador/controlador.php?click=listaSelect">Lista Select</a></li>
      </ul>
    </div>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Icono</th>
            <th>Ruta</th>
        </tr>
      <?php
          require_once('../Controlador/controlador.php');
          $controlador = new Controlador;
          $controlador->listar();
          $filas = $controlador->filas;
          if (isset($filas)) {
              foreach ($filas as $indice) {
                  echo "
                          <tr>
                              <td>".$indice['nombre']."</td>
                              <td>".$indice['icono']."</td>
                              <td>".$indice['ruta']."</td>
                              <td><a href=../Controlador/controlador.php?click=modificar&idMini=".$indice['idMinijuego']."><img src='../../Imagenes/editar.png'></a></td>
                              <td><a href=../Controlador/controlador.php?click=borrar&idMini=".$indice['idMinijuego']."><img src='../../Imagenes/borrar.png'></a></td>
                          </tr>
                      ";
              }
          }else{
              echo "<div class=error>No existen valores.</div>";
          }
      ?>
    </table>
  </body>
</html>
