<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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

      require "meses.php";  //Localiza el archivo "meses.php"
      $mes = new Meses(); //Crea una variable que tenga la clase "Meses"
      $mes->visualizar($meses); //Llamamos a la funcion "visualizar" que esta dentro de la clase "Meses"
    ?>
  </body>
</html>
