<?php
	setlocale(LC_ALL,"es_ES");
	date_default_timezone_set('America/Bogota');
  $zonahoraria = time();
     ?>

	  <div class="menu_inicio" style="display: none;">
		  <div class="m-l-i">

			  	<div class="opciones_inferior">
					<div class="opciones">
						<form action="" method="post">
					  		<select name="change_theme" id="">
					  			<option value="" disabled selected>Elige un tema</option>
					  			<?php echo $selectheme; ?>
					  		</select>
				  			<input type="submit" value="Aplicar" name="Aplicar">
				  		</form>
					</div>
					<div class="M_opciones">
						<span>Configuración</span>
					</div>
			  	</div>
		</div>
	  	<div class="m-l-d">lado derecho</div>
	  </div>



<div class="barra">
<div class="b-menu"></div>
<div class="M-buscador">
	<form class="" action="http://www.google.com/search" >
		<!-- <input type="text" name="cortana" id="cortana"> -->
		<input type="text" name="q" size="32" id="q" style="width: 88.8%; height: 41px;">
		<input type="hidden" name="ie" value="utf-8">
		<input type="hidden" name="oe" value="utf-8">
	</form>
</div>
<div class="M-item"></div>
<div class="M-item2"></div>
<div class="M-item2"></div>
<div class="M-item2"><a href="http://www.google.com.co" target="_blank"><img src="Sources/themes/windows10/img/folderj.png"/></a></div>

</div>


<div class="hora">
	<center style="margin-top: 5px;"><?php echo date("h:i",$zonahoraria); ?></center>
	<center><?php echo date("d/m/Y"); ?></center>
</div>
