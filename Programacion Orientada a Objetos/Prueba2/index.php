<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require "meses.php";  //Localiza el archivo "meses.php"
      $mes = new Meses(); //Crea una variable que tenga la clase "Meses"
      $mes->visualizar(); //Llamamos a la funcion "visualizar" que esta dentro de la clase "Meses"
    ?>
  </body>
</html>
