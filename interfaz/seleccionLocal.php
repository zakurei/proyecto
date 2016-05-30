<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
<?php
include_once ("head.php");
include_once ("../conexion/conexion.php");
include_once ("../logica/seleccionLocal.php");

?>

<title>Seleccion Locales</title>

</head>
<body id="seleccionLocal">

	<div class="fondo">
		<div
			class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")?>

		<main class="mdl-layout__content">
			<div class="grid mdl-grid">
				<div class="mdl-grid mdl-shadow--4dp mdl-cell mdl-cell--12-col">
				
				<?php seleccionLocal();?>

				</div>
			</div>
		
		<?php include_once ("footer.php")?>
		
		 </main>
		</div>
	</div>
</body>
</html>