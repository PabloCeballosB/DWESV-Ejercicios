<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Meses</title>
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
    <?php
      //Array que contiene el nombre de los meses
      $meses = array(
        1=>"Enero",
        2=>"Febrero",
        3=>"Marzo",
        4=>"Abril",
        5=>"Mayo",
        6=>"Junio",
        7=>"Julio",
        8=>"Agosto",
        9=>"Septiembre",
        10=>"Octubre",
        11=>"Noviembre",
        12=>"Diciembre"
      );

      //Array que contiene el numero de dias que contiene cada mes
      $numDias = array(
        "Enero"=>31,
        "Febrero"=>28,
        "Marzo"=>31,
        "Abril"=>30,
        "Mayo"=>31,
        "Junio"=>30,
        "Julio"=>31,
        "Agosto"=>31,
        "Septiembre"=>30,
        "Octubre"=>31,
        "Noviembre"=>30,
        "Diciembre"=>31
      );
      echo '<div><h2>Mostrando todos los meses</h2>';
      echo '<table><tr><th>Nombre</th></tr>';

      //Version abreviada de foreach que solamente muestra el contenido del array ($mes)
      foreach ($meses as $mes)
      {
          echo '<tr><td>'.$mes.'</td></tr>';
      }

      echo '</table></div>';

      //---------------------------------------------------

      echo '<div><h2>Mostrando todos los meses con sus dias</h2>';
      echo '<table><tr><th>Nombre</th><th>Numero<br>de Dias</th></tr>';

      //Version completa del foreach que muestra el nombre del nombre ($mes) y su contenido ($diasmes)
      foreach ($numDias as $mes => $diasmes)
          echo '<tr><td>'.$mes.'</td><td>'.$diasmes.'</td></tr>';

      echo '</table></div>';
    ?>
  </body>
</html>
