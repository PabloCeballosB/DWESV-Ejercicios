<?php
  class Meses{
    //Variable que almacenara array de meses
    private $mes;

    function crear_array(){
      //crear array de meses en atributo mes
      $this->mes = array(
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
    }

    function visualizar(){
      echo "<table>";
      //Foreach que se encarga de visualizar el array de meses por indice y su contenido
      foreach($this->mes as $numero => $nombre){
        echo "<tr><td>Indice $numero → $nombre </td></tr>";
      }
      echo "</table>";
    }
  }


 ?>
