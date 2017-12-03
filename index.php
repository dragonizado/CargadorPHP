<?php
	include "Sources/config.php";
	include "Sources/load.php";
	include "Sources/engine.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php echo $css; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Mis proyectos</title>
</head>

<body>
	<header>
	<?php
		$url_fileh = "Sources/themes/$dir2[$theme]/view/header.php";
		if(file_exists($url_fileh)){
			include"Sources/themes/$dir2[$theme]/view/header.php";
		}else{
			$mensaje = "<br>Error al encontrar el archivo header <br>";
			$mensaje2 = "Para solucionar este problema cree una carpeta con el nombre view y dentro cree el archivo con nombre header.php <br>";
			echo $mensaje ;
			echo $mensaje2 ;
		}
	?></header>
	<main>
	<?php
		$url_fileh = "Sources/themes/$dir2[$theme]/view/main.php";
		if(file_exists($url_fileh)){
			include"Sources/themes/$dir2[$theme]/view/main.php";
		}else{
			$mensaje = "<br>Error al encontrar el archivo main <br>";
			$mensaje2 = "Para solucionar este problema cree una carpeta con el nombre view y dentro cree el archivo con nombre main.php <br>";
			echo $mensaje;
			echo $mensaje2 ;
		}
	?></main>
	<footer>
		<?php
			$url_fileh = "Sources/themes/$dir2[$theme]/view/footer.php";
			if(file_exists($url_fileh)){
			include"Sources/themes/$dir2[$theme]/view/footer.php";
		}else{
			$mensaje = "<br>Error al encontrar el archivo footer <br>";
			$mensaje2 = "Para solucionar este problema cree una carpeta con el nombre view y dentro cree el archivo con nombre footer.php<br><br>";

			$default = "<a href=''>Recargar</a> <br>";
			echo $mensaje ;
			echo $mensaje2 ;
			echo $default;
		}
			?>
			</footer>
		<?php echo $scripts; ?>
</body>
</html>
