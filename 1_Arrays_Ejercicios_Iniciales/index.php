<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array Meses</title>
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>
  <body>
    <?php
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

      echo '<h2>Mostrando todos los meses</h2>';
      echo '<table><tr><th>Nombre</th></tr>';
			/*foreach ($meses as $mesnum => $mes)
      {
        echo '<tr><td>'.$mesnum.'</td><td>'.$mes.'</td></tr>';
      }*/

      foreach ($meses as $mes)
      {
          echo '<tr><td>'.$mes.'</td></tr>';
      }
      echo '</table>';


    ?>
  </body>
</html>
