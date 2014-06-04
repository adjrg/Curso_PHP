<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
	<title>Curso PHP</title>
</head>
<body>

<?php
	switch ($_GET['Operacion']) 	// utilizamos un switch para la seleccion de la operacion
	{
		case 'Suma':
			echo "El resultado es: ","$_GET[n1]" + "$_GET[n2]";	// para suma
			break;

		case 'Resta':
			echo "El resultado es: ","$_GET[n1]" - "$_GET[n2]";	// para resta
			break;
		
		case 'Multiplicacion':
			echo "El resultado es: ","$_GET[n1]" * "$_GET[n2]"; // para multiplicacion
			break;

		case 'Division':				// para division

			if("$_GET[n2]"==0)
			{
				echo "No se puede dividir entre 0";	// validamos el 0
				break;
			}

			else
			{
				echo "El resultado es: ","$_GET[n1]" / "$_GET[n2]";
				break;
			}

		case 'Modulo':
			echo "El resultado es: ","$_GET[n1]" % "$_GET[n2]";	// para modulo
			break;
	}
?>
<footer>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p>Diseñado: Alex Rubio</p>
	<p>Informacion de contacto: <a href="Rubioalexg1991@outlook.com">
	Rubioalexg1991@outlook.com </a></p>
</footer>
</body>
</html>
