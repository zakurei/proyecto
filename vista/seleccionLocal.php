<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
<?php include_once ("head.php")?>

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
// 				$result = mysqli_query($this -> connection, "SELECT id,nombre,imagen FROM locales");
				
				
// 				while (mysqli_fetch_array($result)!=NULL){
// 					$nombre=$_SESSION[][];
// 					$imagen=$_SESSION[][];
// 					$nombreId= str_replace(' ', '_', $nombre);
					
// 					echo '
// 					<div class="mdl-card galeria">
// 						<div class="mdl-card__title mdl-card--expand" background: url("../images/'.$imagen.')></div>
// 							<div class="mdl-card__actions">
// 								<a class="mdl-button mdl-js-button mdl-js-ripple-effect botonGaleria" href="local.php?id='.$nombreId.'">'.$nombre.'</a>
// 							</div>
// 					</div>';
					
// 				}
							
				?>
				
					<div class="mdl-card galeria">
						  <div class="mdl-card__title mdl-card--expand"></div>
						  <div class="mdl-card__actions">
						  	<a id="home" class="mdl-button mdl-js-button mdl-js-ripple-effect botonGaleria" href="local.php?id=jokers">Local</a>
						  </div>
					</div>
					
					<div class="mdl-card galeria">
						  <div class="mdl-card__title mdl-card--expand"></div>
						  <div class="mdl-card__actions">
						  	<a id="home" class="mdl-button mdl-js-button mdl-js-ripple-effect botonGaleria" href="local.php?id=jokers">Local</a>
						  </div>
					</div>
					
					<div class="mdl-card galeria">
						  <div class="mdl-card__title mdl-card--expand"></div>
						  <div class="mdl-card__actions">
						  	<a id="home" class="mdl-button mdl-js-button mdl-js-ripple-effect botonGaleria" href="local.php?id=jokers">Local</a>
						  </div>
					</div>
				
					
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