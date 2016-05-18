<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
<?php include_once ("head.php")?>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/mapa.js"></script>

<title>Mapa</title>

</head>
<body id="mapa">


	<div class="fondo">
		<div
			class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")?>

	<div id="map" style="width: 1440px; height: 611px;"></div>
	
	<?php include_once ("footer.php")?>
		
		 </main>
		</div>
	</div>
</body>
</html>