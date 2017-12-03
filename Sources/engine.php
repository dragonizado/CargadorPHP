<?php

	$mensaje = "";
	$mensaje2 = "";
	$urls = "Sources/themes/";
	$carpeta = scandir($urls);
	$selectheme =null;
	$archivourl = "Sources/test_config.txt";
	$filesa = fopen($archivourl, "r");
	$todo = fread($filesa, filesize($archivourl));
	$lineas = explode(chr(13).chr(10), $todo);
	$theme = $lineas["2"];
	$url_theme = $lineas["2"]."/";
	$url_themes = $lineas["2"];
	$self = $_SERVER['PHP_SELF'];

	foreach ($carpeta as $key => $value) {
		if($value != "." && $value != ".." && is_dir($urls.$value))
		{
			$dir[] = $value;
			$dir2["$value"] = $value;
			$selectheme .= "<option value='$value'>$value</option>";
		}
	}

	$url_css = "Sources/themes/".$url_theme."css/";
	$url_csss = "Sources/themes/".$url_themes."/css";
	$url_js = "Sources/themes/".$url_theme."js/";
	$url_jss = "Sources/themes/".$url_themes."/js";
	$url_carpetas_css = scandir($url_css);
	$url_carpetas_js = scandir($url_js);
	$css = null;
	$scripts = null;




foreach($url_carpetas_css as $key => $value_css){
	if ($value_css != "." && $value_css != "..") {
			$cssa = $url_csss."/".$value_css;
			$css .="<link type='text/css' rel='stylesheet' href='$cssa' media='screen,projection'/>";
	}
}

foreach($url_carpetas_js as $key => $value_js){
	if ($value_js != "." && $value_js != "..") {
			$jsa = $url_jss."/".$value_js;
			$scripts .="<script type='text/javascript' src='$jsa'></script>";
	}
}
	$url_scripts = "";
if(file_exists($archivourl))
	{
		$file = fopen("Sources/test_config.txt", "w+")or die("El archivo de configuracion no existe. Para resolver este problema crea un archivo de texto con el nombre test_config.txt dentro de la carpeta Sources");
		 fwrite($file, "Configuracion de cargador" . PHP_EOL);
		 fwrite($file, "temas" . PHP_EOL);
		 fwrite($file, "$dir2[$theme]" . PHP_EOL);

		 fclose($file);


	}else{

		 $file = fopen("Sources/test_config.txt", "w+") or die("El archivo de configuracion no existe. Para resolver este problema crea un archivo de texto con el nombre test_config.txt dentro de la carpeta Sources");
		 fwrite($file, "Configuracion de cargador" . PHP_EOL);
		 fwrite($file, "temas" . PHP_EOL);
		 fwrite($file, "default" . PHP_EOL);
		 fclose($file);
		 echo $mensaje_load = "<h1>El archivo de configuracion no existe vuelve a recargar la pagina</h1>";
	}


	if (isset($_POST["Aplicar"])) {
		$theme_select = $_POST["change_theme"];

		$file = fopen("Sources/test_config.txt", "w+")or die("El archivo de configuracion no existe. Para resolver este problema crea un archivo de texto con el nombre test_config.txt dentro de la carpeta Sources");
		 fwrite($file, "Configuracion de cargador" . PHP_EOL);
		 fwrite($file, "temas" . PHP_EOL);
		 fwrite($file, "$theme_select" . PHP_EOL);
		 fclose($file);
		 header("location:$self");

	}






 ?>
