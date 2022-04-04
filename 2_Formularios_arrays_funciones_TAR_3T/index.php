<!-- Pablo Ceballos Benitez -->
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <!--Inicio de crear formulario de datos-->
    <form method="post">
      <ul>
        <li>
          <!--Campo que contiene las categorias-->
          <label for="categoria">Categoria</label>
          <select name="categoria" id="miSelect">
            <option>Navidad</option>
            <option>Semana Ignaciana</option>
            <option>Fiestas Escolares</option>
          </select>
        </li>
        <li>
          <!--Campo en el que se introduce nombre de la actividad-->
          <label for="nombreActividad">Nombre de la actividad</label>
          <input type="text" name="nombreActividad" id="nombreActividad"/>
        </li>
        <li id="etapas">
          <!--Campo en el que tienen los elementos checkbox de las Etapas-->
          <fieldset>
            <legend>Etapas</legend>
            <input type="checkbox" name="primaria" class="etapas" value="Primaria">Primaria</input><br>
            <input type="checkbox" name="eso" class="etapas">ESO</input><br>
            <input type="checkbox" name="bachillerato" class="etapas">Bachillerato</input><br>
            <input type="checkbox" name="cfgm" class="etapas">CFGM</input><br>
            <input type="checkbox" name="cfgs" class="etapas">CFGS</input>
          </fieldset>
        </li>
        <li id="actividadSeccion">
          <!--Campo que contiene el checkbox de Actividad de seccion-->
          <input type="checkbox" name="actividad">Actividad de seccion</input>
        </li>
        <li>
          <!--Boton para enviar los datos del formulario-->
          <input type="submit" name="submit" value="ENVIAR"/>
        </li>
    </form>
    <?php
      //Detecta si el boton "Enviar" ha sido pulsado para enviarlo a la funcion iniciar()
      if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
          iniciar();
      }

      //Funcion que contiene todas las funciones necesarias para el proyecto
      function iniciar(){
        recoger_formulario();
      }

      /*Funcion que se encarga de recoger los datos introducidos en el formulario
      e insertarlos en el array $datos*/
      function recoger_formulario(){
          $datos = array(
            "Categoria"=>$_POST['categoria'],
            "NombreActividad"=>$_POST['nombreActividad']
          );

          /*En las etapas debemos crear array dinamico en el que el indice se Genere*/
          /*Automaticamente con 0,1,2,3..., y se declararia asi:*/
          //name=Etapa[]
          //value="ESO"


          //Comprobamos si el check "primaria" está seleccionado o no para introducirlo en el array
          if (isset($_POST['primaria'])){
            $datos["Primaria"] = "SI";
          }
          else {
            $datos["Primaria"] = "NO";
          }

          //Comprobamos si el check "ESO" está seleccionado o no para introducirlo en el array
          if(isset($_POST['eso'])){
              $datos["ESO"] = "SI";
          }
          else{
            $datos["ESO"] = "NO";
          }

          //Comprobamos si el check "bachillerato" está seleccionado o no para introducirlo en el array
          if(isset($_POST['bachillerato'])){
            $datos["Bachillerato"] = "SI";
          }
          else{
            $datos["Bachillerato"] = "NO";
          }

          //Comprobamos si el check "CFGM" está seleccionado o no para introducirlo en el array
          if(isset($_POST['cfgm'])){
            $datos["CFGM"] = "SI";
          }
          else{
            $datos["CFGM"] = "NO";
          }

          //Comprobamos si el check "CFGS" está seleccionado o no para introducirlo en el array
          if(isset($_POST['cfgs'])){
            $datos["CFGS"] = "SI";
          }
          else{
            $datos["CFGS"] = "NO";
          }

          //Comprobamos si el check "Actividad" está seleccionado o no para introducirlo en el array
          if(isset($_POST['actividad'])){
            $datos["ActividadSeccion"] = "SI";
          }
          else{
            $datos["ActividadSeccion"] = "NO";
          }

          mostrar_datos($datos);
      }

      //Funcion que muestra el resultado de los datos introducidos en el formulario
      function mostrar_datos($datos){
        echo "<h2>------- Datos Introducidos ------</h2>";  //Titulo "Datos Introducidos"
        foreach($datos as $nombre => $dato) //foreach que recorre el array $datos para así mostrarlos
        {
          if($dato!="NO")
          {
            if($nombre == "ActividadSeccion")
            {
              echo '<p><b>Has seleccionado Actividad de Seccion</b></p>';
            }
            else{
              echo '<p><b>'.$nombre.'</b> → <span class="datos">'.$dato.'</span></p>';  //Lineas que muestran los datos introducidos
            }
          }

        }
      }
     ?>
  </body>
</html>
