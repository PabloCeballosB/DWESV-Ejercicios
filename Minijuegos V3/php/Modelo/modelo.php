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
      if(!empty($_FILES['icono']['name'])){
          $iconoArchivo = $_FILES['icono']['tmp_name'];
          $iconoDestino = "../../Imagenes/Iconos/".$_FILES['icono']['name'];
          $iconoNombre = $_FILES['icono']['name'];
          move_uploaded_file($iconoArchivo, $iconoDestino);
      }
      else {
        $icono = 'NULL';
      }

      if($_FILES['icono']['type']=="image/jpeg" || $_FILES['icono']['type']=="image/png" || $_FILES['icono']['type']=="image/jpg")
      {
        $consulta = "INSERT INTO minijuegos(nombre, icono, ruta) VALUES ('".$nombre."', '".$iconoNombre."', '".$ruta."' );";
        $this-> conexion -> query($consulta);
      }
      else {
        echo "Error";
      }
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
      $filaMod = mysql_fetch_array($resultado);

    }

    /*Funcion que borra el minijuego deseado*/
    function borrar(){
      $consulta = "DELETE FROM minijuegos WHERE idMinijuego=".$_GET['idMini'].";";
      $this -> conexion -> query($consulta);
    }
  }


?>
