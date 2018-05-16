<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script type="text/javascript" src="js/1.js"></script>
	<script type="text/javascript" src="angular/angular.min.js"></script>
	<script type="text/javascript" src="angular/angular-resource.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/controller.js"></script>

</head>
<body ng-app="app">
	<a href="#" onclick="hola1()">Hola</a>
	<p></p>
	<label>Exp</label>
	<input type="text" id="exp" name="exp">
	<button onclick="valida()">Validar</button>
	<p></p>
	<button onclick="testing()">Tilde</button>
	<p></p>
	<p></p>
	<label>Phone</label>
	<input type="text" id="cell" name="cell" onkeypress="onlyNumbers(event)">
	<p></p>
	<label>Telefono</label>
	<input type="tel" id="telefono" name="telefono">
	<p></p>
	JQury: jquery.validate.min.js Please fix this field.
	<p></p>
	<?php
		$cell = '+56946206907';
		echo $cell;
		echo '<br>';
		echo utf8_decode($cell);
		echo '<p></p>';
		$menu = 'menú';
		echo $menu;
		echo '<br>';
		echo utf8_decode($menu);
		echo '<br>';

		$texto = "     sdfdsf sdfdsfdsf  sdsdfdsfdsf    ";
		echo trim($texto);
		echo '<br>';
		echo $texto;
		echo '<br>';
		$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		echo '<a href="' . $actual_link . '">Volver</a>';



		if(1==1){

			if(file_exists("js/1.js"))
				return;

			echo "11111111111111";

		}else{
			echo "0000000000000";
		}

	?>
</body>
</html>