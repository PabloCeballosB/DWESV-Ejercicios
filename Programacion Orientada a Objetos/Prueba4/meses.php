<?php
  class Meses{

    function visualizar($array){

      echo "<table>";
      //Foreach que se encarga de visualizar el array de meses por indice y su contenido
      foreach($array as $numero => $nombre){
        echo "<tr><td>Indice $numero → $nombre </td></tr>";
      }
      echo "</table>";
    }
  }


 ?>
