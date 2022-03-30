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
            <option></option>
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
          $datos = array(){
            "Categoria"=>$_POST['categoria'],
            "NombreActividad"=>$_POST['nombreActividad'],
            "Etapa1"=>$_POST['primaria'],
            "Etapa2"=>$_POST['eso'],
            "Etapa3"=>$_POST['bachillerato'],
            "Etapa4"=>$_POST['cfgm'],
            "Etapa5"=>$_POST['cfgs'],
            "ActividadSeccion"=>$_POST['actividad']
          }
      }
     ?>
  </body>
</html>
