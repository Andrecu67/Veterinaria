<html>
	<head>
	<meta charset="UTF-8">
	
		<!-- de acuerdo al contenido de la variable "accion", escribimos el título -->
		<?php
			if ($_GET["accion"] == "alta")
				echo "<title>" . "Alta de Registro" . "</title>";
		?>
	</head>

	<body bgcolor="#DACD00">
		
<center><img src="logo.gif"></center>

		<?php
			// Acá mostramos la pantalla de carga de ALTAS.
			if ($_GET["accion"] == "alta")
			{
				
				echo "<h1>REGISTRO</h1>";
				echo "<br>";
				echo "<FORM ACTION=\"abm.php\" METHOD=\"GET\">";
					echo "Tamaño: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtTamaño\">" . "<BR>";
					echo "<BR>";
					echo "Peso: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtPeso\">" . "<BR>";
					echo "<BR>";
					echo "Raza: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtRaza\">" . "<BR>";
					echo "<BR>";
					echo "Nombre Dueño: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtNombre_Dueño\">" . "<BR>";
					echo "<BR>";
					echo "Dirección: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtDirección\">" . "<BR>";
					echo "<BR>";
					echo "Teléfono: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtTeléfono\">" . "<BR>";
					echo "<BR>";
					echo "Edad: " . "<INPUT TYPE=\"TEXT\" NAME=\"txtEdad\">" . "<BR>";
					echo "<BR>";
					echo "<INPUT TYPE=\"submit\" NAME=\"OK\" VALUE=\"Registrar\">";
					echo "<INPUT TYPE=\"hidden\" NAME=\"accion\" VALUE=\"realizar_alta\">";

				echo "</FORM>";

				exit();
			}
		?>

        <?php
			// Acá, en base a los datos recibidos (nombre, telefono, direccion, etc), hacemos el alta.
			if ($_GET["accion"] == "realizar_alta")
			{
				include("sql.php");

				$Tamaño = $_GET["txtTamaño"];
				$Peso = $_GET["txtPeso"];
				$Raza = $_GET["txtRaza"];
				$Nombre = $_GET["txtNombre_Dueño"];
				$Dir= $_GET["txtDirección"];
				$Tel = $_GET["txtTeléfono"];
				$Edad = $_GET["txtEdad"];

				alta ($Tamaño,$Peso,$Raza,$Nombre,$Dir,$Tel,$Edad);
			}
		?>

		<form action="pagina_siguiente.php" method="POST">
<center><input type=submit value=Volver><center>
</form>

	</body>
</html>