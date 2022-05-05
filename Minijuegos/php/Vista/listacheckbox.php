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
        <li><a href="../Controlador/controlador.php?click=alta">Alta de Minijuegos</li>
        <li><a href="../Controlador/controlador.php?click=lista">Lista de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=listaSelect">Lista Select</a></li>
        <li>Lista Checkbox</li>
      </ul>
    </div>
    <form method="post" id="formularioCheckbox">
      <?php
        require_once('../Controlador/controlador.php');
        $controlador = new Controlador;
        $controlador->listar();
        $filas = $controlador->filas;
        if (isset($filas)) {
            foreach ($filas as $indice) {
                echo "<input type='checkbox' name='minijuego[]' id='".$indice['idMinijuego']."' value='".$indice['idMinijuego']."'>
                      <label for='".$indice['idMinijuego']."'>".$indice['nombre']."</label><br>
                      ";
            }
        }else{
            echo "<option>No Existen valores</option>";
        }
       ?>
       <input type="submit" value="Buscar" name="buscarCheckbox"/>
     </form>
     <table id="tablaCheckbox">
       <tr>
         <th>Nombre</th>
         <th>Icono</th>
         <th>ruta</th>
       </tr>
      <?php
        if(isset($_POST['buscarCheckbox']) && empty($_POST['BuscarCheckbox']))
        {
          if(!empty($_POST['minijuego']))
          {
            foreach($_POST['minijuego'] as $selected)
            {
              foreach ($filas as $indice)
              {
                if($selected == $indice['idMinijuego'])
                {
                  echo "
                          <tr>
                            <td>".$indice['nombre']."</td>
                            <td>".$indice['icono']."</td>
                            <td>".$indice['ruta']."</td>
                          </tr>
                  ";
                }
              }
            }
          }
          else{
            echo "<div class='divError'>No has seleccionado ningun minijuego</div>";
          }
        }
      ?>
    </table>
  </body>
</html>
