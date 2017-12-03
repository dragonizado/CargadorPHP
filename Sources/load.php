<?php
 $listar = null;
	$directorio = opendir('proyectos/');
	while ($elemento = readdir($directorio)){
		if($elemento != '.' && $elemento != '..'){
		if (is_dir("proyectos/".$elemento))
		{
			$listar .="<li><a href='Proyectos/$elemento'>$elemento</a></li>";
		}
		}
	}

	function run(){
		$list = null;
		$name = null;
		$url = "Proyectos/";
		$dir = scandir($url);
		foreach ($dir as  $element) {
			if($element != "." && $element != ".." && is_dir($url.$element)){

				echo "<div class='content'>";
				echo "<a href='Proyectos/". $element ."'>";
				echo "<div class='folder'><i class='fa fa-code'></i></div>";
				echo "<h5>". $element ."</h5>";
				echo "</a>";
				echo "</div>";

			}
		}
	}
	function windows10(){
		$list = null;
		$name = null;
		$url = "Proyectos/";
		$dir = scandir($url);
		foreach ($dir as  $element) {
			if($element != "." && $element != ".." && is_dir($url.$element)){
            echo "<div class='carpetas'>";
				echo "<div class='folder'>";
				echo "<a href='Proyectos/". $element ."'>";
            echo "<img src='Sources/themes/windows10/img/folder.png'/>";
				echo "</a>";
				echo "</div>";
            echo "<div class='nombre_carpeta'>";
            echo "<h5>". $element ."</h5>";
            echo "</div>";
            echo "</div>";

			}
		}
	}
?>
