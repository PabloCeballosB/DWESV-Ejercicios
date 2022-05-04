<?php
  class Controlador{
    public $modelo;

    function __construct(){
        require_once('../Modelo/modelo.php');
        $this -> modelo = new Modelo;
    }

    function alta(){
        require('../Vista/alta.php');
        if (isset($_POST['submit'])) {
            if(!empty($_POST['nombre'] && $_POST['ruta'])) {
                $this -> modelo -> insertar();
            }
        }
    }
  }

    $controlador = new Controlador;

    switch ($_GET['click']) {
        case 'alta':
            $controlador->alta();
            break;
        /*case 'lista':
            $controlador -> listarVista();
            break;*/
        default:
            echo "<h1>Acción no encontrada.</h1>";
            break;
    }


?>
