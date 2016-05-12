<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
<?php 
include_once ("head.php");
include_once ("../controladores/conexion.php");
		
?>

<title>Jokers Club</title>

</head>
<body id="seleccionLocal">

	<div class="fondo">
		<div
			class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")?>
			
	
		<main class="mdl-layout__content">
			<div class="grid mdl-grid">
				<div class="mdl-grid mdl-shadow--4dp mdl-cell mdl-cell--12-col">
				
				<?php 				
				$conexion = new conexion();
				$conn = $conexion->conectar();
				
				$sql = "SELECT * FROM locales";
				$cons = $conexion->ejecutar_consulta($sql);
				
				while ($row = mysqli_fetch_object($cons)){
					$imagen = $row->imagen;
					$nombre = $row->nombre;
					$nombreId= str_replace(' ', '_', $nombre);  
					
					echo '
 					<div class="mdl-card galeria" style=" border: 1px solid #ce318d; background:url('.''.'images/'.$imagen.''.')  center / cover;">
 						<div class="mdl-card__title mdl-card--expand"></div>
 							<div class="mdl-card__actions">
							<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect botonGaleria" href="local.php?id='.$nombreId.'"><div class="material-icons">visibility</div></a> 							</div>
 					</div>';
					
				}
				
				
				

							
				?>
				
				
					
				</div>
			</div>
		
		<?php include_once ("footer.php")?>
		
		 </main>
			<div class="mdl-layout__obfuscator"></div>
		</div>
	</div>
	<script src="../js/material.min.js"></script>
</body>
</html>