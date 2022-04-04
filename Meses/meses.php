<html>
	<head>
		<title>Mi primer ejercicio</title>
		<link href="meses.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<?php

			$meses = array(
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
			12=>"Diciembre");

			$dmes = array(
				"Enero"=>31,
				"Febrero"=>28,
				"Marzo"=>31,
				"Abril"=>30,
				"Mayo"=>31,
				"Junio"=>30,
				"Julio"=>31,
				"Agosto"=>31,
				"Septiembre"=>30,
				"Octubre"=>31,
				"Noviembre"=>30,
				"Diciembre"=>31
			);

			echo '<h2>Mostrando todo el contenido con print_r</h2>';

			print_r($meses);

			echo '<h2>Con el metodo foreach</h2>';

			foreach ($meses as $mesnum => $mes)
			{
				echo '<p>'.$mesnum.' es igual a '.$mes.'</p>';
			}

			echo '<h2>Con el metodo foreach (tabla)</h2>';

			echo '<table><tr>';

			foreach($meses as $mesnum => $mes)
			{
				echo '<td id="numero">'.$mesnum.'</td>';
			}

			echo '</tr><tr>';

			foreach($meses as $mesnum => $mes)
			{
				echo '<td>'.$mes.'</td>';
			}

			echo '</tr></table>';

			echo '<hr>';


			echo '<h2>Con funciones</h2>';



			function averiguarMes($meses)
			{
				$numMes = $_GET["numero"];
				if($numMes > 0 && $numMes < 13)
				{
					for($i = 1; $i <=12; $i++)
					{
						if($i == $numMes)
							echo '<h3>El numero '.$numMes.' corresponde al mes '.$meses[$i].'</h3>';
					}
				}
				else
					echo '<h3>Introduce un numero del 1 al 12</h3>';
			}

			if(isset($_GET["submit"]) && !empty($_GET["submit"])) {
				averiguarMes($meses);
			}

			echo '<form method="GET">';
			echo '<input type="text" id="numeroMess" name="numero">';
			echo '<input type="submit" name="submit" value="Averiguar">';
			echo '</form>';

			echo '<hr>';

			echo '';
			echo '<h2>Contar dias de cada mes</h2>';



			echo '<table><tr>';

			foreach($dmes as $mes => $dias)
			{
				echo '<td id="numero">'.$mes.'</td>';
			}

			echo '</tr><tr>';

			foreach($dmes as $mes => $dias)
			{
				echo '<td>'.$dias.'</td>';
			}

			echo '</tr></table>';













		?>

	</body>
</html>
