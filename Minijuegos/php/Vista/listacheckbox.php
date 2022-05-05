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
        /*Localiza controlador.php y llama a la funcion listar()*/
        require_once('../Controlador/controlador.php');
        $controlador = new Controlador;
        $controlador->listar();
        $filas = $controlador->filas;
        if (isset($filas)) {
            //Bucle que recorre el array donde estan situados las filas de todos los minijuegos
            foreach ($filas as $indice) {
                echo "<input type='checkbox' name='minijuego[]' id='".$indice['idMinijuego']."' value='".$indice['idMinijuego']."'>
                      <label for='".$indice['idMinijuego']."'>".$indice['nombre']."</label><br>
                      ";
            }
        //En caso de que no haya ningun minijuego en la base de datos muestra error
        }else{
            echo "<div class="divError">No Existen valores</div>";
        }
       ?>
       <input type="submit" value="Buscar" name="buscarCheckbox"/>
     </form>
     <!--Creaccion de tabla resultado Checkbox-->
     <table id="tablaCheckbox">
       <tr>
         <th>Nombre</th>
         <th>Icono</th>
         <th>ruta</th>
       </tr>
      <?php
        //If que detecta si se ha pulsado el boton buscar
        if(isset($_POST['buscarCheckbox']) && empty($_POST['BuscarCheckbox']))
        {
          //If que se encarga de comprobar si el minijuego esta seleccionado
          if(!empty($_POST['minijuego']))
          {
            //Bucle que recorre todos los minijuegos seleccionados
            foreach($_POST['minijuego'] as $selected)
            {
              //Bucle que recorre toda la lista de minijuegos
              foreach ($filas as $indice)
              {
                //Si el minijuego seleccionado y el minijuego de la lista coincide, este se muestra
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
          /*Si no ha seleccionado ningun minijuego, muestra error*/
          else{
            echo "<div class='divError'>No has seleccionado ningun minijuego</div>";
          }
        }
      ?>
    </table>
  </body>
</html>
