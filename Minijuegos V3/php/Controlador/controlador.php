<?php
  class Controlador{
    private $modelo;
    private $filas;
    private $filaMod;

    /*Funcion que se encarga de conectar con modelo.php*/
    function __construct(){
        require_once('../Modelo/modelo.php');
        $this -> modelo = new Modelo;
    }

    /*Funcion que se encarga de mostrar la pagina de alta.php y comprobar
    si se ha introducido datos correctamente asi enviando a la funcion
    "insertar" de modelo.php*/
    function alta(){
        require('../Vista/alta.php');
        if (isset($_POST['submit'])) {
            if(!empty($_POST['nombre'] && $_POST['ruta'])) {
                $this -> modelo -> insertar();
            }
        }
    }

    /*Funcion que muestra el archivo listar.php*/
    function listarVista(){
      require('../Vista/listar.php');
    }

    /*Funcion que se encarga de llamar a la funcion listar() del modelo.php para asi
    crear un array con todos los datos introducidos*/
    function listar(){
        $this -> modelo -> listar();
        $this->filas = $this -> modelo -> filas;
    }

    /*Funcion que se encarga de mostrar el archivo modificar.php*/
    function modificarVista(){
      require ('../Vista/modificar.php');
    }

    /*Funcion que se encarga de llamar a la funcion modificar de modelo.php
    y capturar los datos cambiados*/
    function modificar(){
      $this -> modelo -> modificar();
      $this -> filaMod = $this -> modelo -> filaMod;
    }

    /*Funcion que se encarga de llamar a la funcion borrar de modelo.php para
    borrar los datos deseados mediante script SQL*/
    function borrar(){
      require('../Vista/borrar.php');
      if (isset($_POST['aceptar']))
      {
        $this -> modelo -> borrar();
        echo "<script language='JavaScript'>location='controlador.php?click=lista'</script>";
      }
      else {
        if(isset($_POST['cancelar']))
        {
          echo "<script language='JavaScript'>location='controlador.php?click=lista'</script>";
        }
      }
    }

    /*Funcion que se encarga de listar los minijuegos en un select llamando a la Funcion
    listar() de modelo.php*/
    function listaSelect(){
      require('../Vista/listaSelect.php');
      $this -> modelo -> listar();
      $this->filas = $this -> modelo -> filas;
    }

    /*Funcion que se encarga de mostrar el archivo listaCheckbox.php y listar*/
    function listaCheckbox(){
      require('../Vista/listaCheckbox.php');
      $this -> modelo -> listar();
      $this->filas = $this -> modelo -> filas;
    }



  }


    $controlador = new Controlador;

    /*Switch que se encarga de mandar a una funcion u otra depende del click donde se haya realizado*/
    switch ($_GET['click']) {
        case 'alta':
            $controlador->alta();
            break;
        case 'lista':
            $controlador -> listarVista();
            break;
        case 'modificar':
            $controlador -> modificarVista();
            break;
        case 'borrar':
            $controlador -> borrar();
            break;
        case 'listaSelect':
            $controlador -> listaSelect();
            break;
        case 'listaCheckbox':
            $controlador -> listaCheckbox();
            break;
        default:
            echo "<h1>Pagina no Encontrada</h1>";
            break;
    }


?>
