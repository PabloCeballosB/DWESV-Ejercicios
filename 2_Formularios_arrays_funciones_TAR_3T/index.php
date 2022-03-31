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
          <input type="text" name="nombreActividad"/>
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
        recoger_formulario();
      }

      function recoger_formulario(){
          $datos = array(
            "Categoria"=>$_POST['categoria'],
            "NombreActividad"=>$_POST['nombreActividad']/*,
            "Primaria"=>$_POST['primaria'],
            "Eso"=>$_POST['eso'],
            "Bahcillerato"=>$_POST['bachillerato'],
            "CFGM"=>$_POST['cfgm'],
            "CFGS"=>$_POST['cfgs'],
            "ActividadSeccion"=>$_POST['actividad']*/
          );
          foreach($datos as $nombre)
          {
            if (empty($_POST[strtolower($nombre)]))
              //$datos[$nombre] = "off";
              echo 'Hola<br>';
          }

          /*if (empty($_POST['primaria']))
            $datos["Primaria"] = "NO";
          else
            $datos["Primaria"] = "SI";*/

          /*foreach($datos as $nombre => $dato)
          {
            if($dato==null)
            {
              $datos[$dato] = "off";
            }
            // echo 'El dato de '.$nombre.' es '.$dato.'<br>';
          }*/

      }
     ?>
  </body>
</html>
