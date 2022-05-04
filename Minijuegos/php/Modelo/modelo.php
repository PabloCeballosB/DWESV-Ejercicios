<?php

  require_once('../config.php');

  class Modelo{

    private $conexion;

    function __construct(){
      $this -> conexion = new mysqli(servidorbd, usuario, contrasena, basedatos);
    }


    function insertar(){
      $nombre = $_POST["nombre"];
      $ruta = $_POST["ruta"];
      if(!empty($_POST["icono"])){
        $icono = $_POST["icono"];
      }
      else {
        $icono = 'NULL';
      }
      $consulta = "INSERT INTO minijuegos(nombre, icono, ruta) VALUES ('".$nombre."', '".$ruta."' , '".$icono."');";
      $this-> conexion -> query($consulta);
    }

    function listar(){
      $consulta = "SELECT * FROM minijuegos";
      
    }
  }


?>
