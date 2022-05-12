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
        <li><a href="../Controlador/controlador.php?click=alta">Alta de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=lista">Lista de Minijuegos</a></li>
        <li>Lista Select</li>
        <li><a href="../Controlador/controlador.php?click=listaCheckbox">Lista Checkbox</a></li>
      </ul>
    </div>
    <div id="miSelect">
      <form method="post">
        <select id="minijuegosSelect" name="selMini">
        <?php
          require_once('../Controlador/controlador.php');
          $controlador = new Controlador;
          $controlador->listar();
          $filas = $controlador->filas;
          if (isset($filas)) {
              foreach ($filas as $indice) {
                  echo "<option value='".$indice['idMinijuego']."'>".$indice['nombre']."</option>";
              }
          }else{
              echo "<option>No Existen valores</option>";
          }


        ?>
        </select>
        <input type="submit" name="botonSelect" value="Ver Datos"/>
      </form>
      <?php
        if(isset($_POST["botonSelect"])) {
          if (isset($filas)) {
              foreach ($filas as $indice)
              {
                if($_POST['selMini'] == $indice['idMinijuego'])
                {
                  echo "
                        <table>
                          <tr>
                            <th>idMinijuego</th>
                            <th>Nombre</th>
                            <th>Icono</th>
                            <th>ruta</th>
                          </tr>
                          <tr>
                            <td>".$indice['idMinijuego']."</td>
                            <td>".$indice['nombre']."</td>
                            <td>".$indice['icono']."</td>
                            <td>".$indice['ruta']."</td>
                          </tr>
                        </table>
                  ";
                }
              }
            }
          }

      ?>
    </div>
  </body>
</html>
