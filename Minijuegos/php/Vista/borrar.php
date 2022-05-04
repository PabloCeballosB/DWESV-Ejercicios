<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alta Minijuegos</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
  </head>
  <body>
    <!--Div de la barra de navegacion con sus respectivas lineas-->
    <div id="barraNavegacion">
      <ul>
        <li><a href="../../index.html">Inicio</a></li>
        <li><a href="../Controlador/controlador.php?click=alta">Alta de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=lista">Lista de Minijuegos</a></li>
        <li><a href="../Controlador/controlador.php?click=listaSelect">Lista Select</a></li>
      </ul>
    </div>

    <!--Div del cuadro de seguridad para borrar minijuego-->
    <div id="borrarFila">
      <p>¿Estas seguro de que quieres borrar el minijuego?</p>
      <form method="post" id="botones">
          <input type="submit" name="cancelar" value="Cancelar" id="btnCancelar"/>
          <input type="submit" name="aceptar" value="Aceptar" id="btnAceptar"/>
      </form>
    </div>
  </body>
</html>
