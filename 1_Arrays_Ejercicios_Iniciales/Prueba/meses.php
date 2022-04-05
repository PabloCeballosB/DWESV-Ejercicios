<?php
  class Meses{
    private $mes;

    function metodo1(){
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

    function metodo2(){
      echo "<table>";
      foreach($this->mes as $numero => $nombre){
        echo "<tr><td>Indice $numero → $nombre </td></tr>";
      }
      echo "</table>";
    }
  }


 ?>
