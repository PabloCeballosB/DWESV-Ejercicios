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

          //Comprobamos si el check "primaria" está seleccionado o no para introducirlo en el array
          if (empty($_POST['primaria'])){
            $datos["Primaria"] = "NO";
          }
          else {
            $datos["Primaria"] = "SI";
          }

          //Comprobamos si el check "ESO" está seleccionado o no para introducirlo en el array
          if(empty($_POST['eso'])){
              $datos["ESO"] = "NO";
          }
          else{
            $datos["ESO"] = "SI";
          }

          //Comprobamos si el check "bachillerato" está seleccionado o no para introducirlo en el array
          if(empty($_POST['bachillerato'])){
            $datos["Bachillerato"] = "NO";
          }
          else{
            $datos["Bachillerato"] = "SI";
          }

          //Comprobamos si el check "CFGM" está seleccionado o no para introducirlo en el array
          if(empty($_POST['cfgm'])){
            $datos["CFGM"] = "NO";
          }
          else{
            $datos["CFGM"] = "SI";
          }

          //Comprobamos si el check "CFGS" está seleccionado o no para introducirlo en el array
          if(empty($_POST['cfgs'])){
            $datos["CFGS"] = "NO";
          }
          else{
            $datos["CFGS"] = "SI";
          }

          //Comprobamos si el check "Actividad" está seleccionado o no para introducirlo en el array
          if(empty($_POST['actividad'])){
            $datos["ActividadSeccion"] = "NO";
          }
          else{
            $datos["ActividadSeccion"] = "SI";
          }

          mostrar_datos($datos);
      }

      //Funcion que muestra el resultado de los datos introducidos en el formulario
      function mostrar_datos($datos){
        echo "<h2>------- Datos Introducidos ------</h2>";  //Titulo "Datos Introducidos"
        foreach($datos as $nombre => $dato) //foreach que recorre el array $datos para así mostrarlos
        {
          echo '<p><b>'.$nombre.'</b> → <span class="datos">'.$dato.'</span></p>';  //Lineas que muestran los datos introducidos
        }
      }
     ?>
