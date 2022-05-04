<?php

  require_once('../config.php');

  class Modelo{

    private $conexion;
    public $filas;
    public $filaMod;

    /*Funcion que se encarga de poder conectar con el servidor de base de datos*/
    function __construct(){
      $this -> conexion = new mysqli(servidorbd, usuario, contrasena, basedatos);
    }

    /*Funcion que se encarga de insertar los datos introducidos en alta.php*/
    function insertar(){
      $nombre = $_POST["nombre"];
      $ruta = $_POST["ruta"];
      if(!empty($_POST["icono"])){
        $icono = $_POST["icono"];
      }
      else {
        $icono = 'NULL';
      }
      $consulta = "INSERT INTO minijuegos(nombre, icono, ruta) VALUES ('".$nombre."', '".$icono."', '".$ruta."' );";
      $this-> conexion -> query($consulta);
    }

    /*Funcion que lista todos los minijuegos introducidos*/
    function listar(){
      $consulta = "SELECT * FROM minijuegos;";
      $resultado = $this -> conexion -> query($consulta);
      while($fila = $resultado->fetch_array()){
          $this -> filas[] = $fila;
      }
    }

    /*Funcion que modifica el minijuego deseado*/
    function modificar(){
      $consulta = "SELECT * FROM minijuegos WHERE idMinijuego=".$_GET['idMini'].";";
      $resultado = $this -> conexion -> query($consulta);
      $filaMod = $resultado;

    }

    /*Funcion que borra el minijuego deseado*/
    function borrar(){
      $consulta = "DELETE FROM minijuegos WHERE idMinijuego=".$_GET['idMini'].";";
      $this -> conexion -> query($consulta);
    }
  }


?>
