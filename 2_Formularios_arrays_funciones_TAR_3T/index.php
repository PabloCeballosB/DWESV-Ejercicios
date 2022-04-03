<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <form method="post">
      <ul>
        <li>
          <label for="categoria">Categoria</label>
          <select name="categoria">
            <option>Navidad</option>
            <option>Semana Ignaciana</option>
            <option>Fiestas Escolares</option>
          </select>
        </li>
        <li>
          <label for="nombreActividad">Nombre de la actividad</label>
          <input type="text" name="nombreActividad" required/>
        </li>
        <li>
          <input type="checkbox" name="primaria" class="etapas">Primaria</input>
          <input type="checkbox" name="eso" class="etapas">ESO</input>
          <input type="checkbox" name="bachillerato" class="etapas">Bachillerato</input>
          <input type="checkbox" name="cfgm" class="etapas">CFGM</input>
          <input type="checkbox" name="cfgs" class="etapas">CFGS</input>
        </li>
        <li>
          <input type="checkbox" name="actividad">Actividad de seccion</input>
        </li>
        <li>
          <input type="submit" name="submit" value="ENVIAR"/>
        </li>
    </form>
    <?php
      if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
          iniciar();
      }

      function iniciar(){
        recoger_formulario();
      }

      function recoger_formulario(){
          $datos = array(
            "Categoria"=>$_POST['categoria'],
            "NombreActividad"=>$_POST['nombreActividad']
          );

          if (empty($_POST['primaria'])){
            $datos["Primaria"] = "NO";
          }
          else {
            $datos["Primaria"] = "SI";
          }


          if(empty($_POST['eso'])){
              $datos["Eso"] = "NO";
          }
          else{
            $datos["Eso"] = "SI";
          }


          if(empty($_POST['bachillerato'])){
            $datos["Bachillerato"] = "NO";
          }
          else{
            $datos["Bachillerato"] = "SI";
          }


          if(empty($_POST['cfgm'])){
            $datos["CFGM"] = "NO";
          }
          else{
            $datos["CFGM"] = "SI";
          }


          if(empty($_POST['cfgs'])){
            $datos["CFGS"] = "NO";
          }
          else{
            $datos["CFGS"] = "SI";
          }


          if(empty($_POST['actividad'])){
            $datos["ActividadSeccion"] = "NO";
          }
          else{
            $datos["ActividadSeccion"] = "SI";
          }

          mostrar_datos($datos);
      }

      function mostrar_datos($datos){
        echo "<br><br><br>";
        foreach($datos as $nombre => $dato)
        {
          echo '<p><b>'.$nombre.'</b> ------> '.$dato.'</p>';
        }
      }
     ?>
  </body>
</html>
