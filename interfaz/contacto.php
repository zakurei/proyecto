<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
  	<?php include_once ("head.php");?>
    <meta charset="UTF-8">
    <title>Contacto</title>
  </head>
  <body id="contacto">
  	<div class="fondo">
	  	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
			<?php include_once ("menu.php")?>
			<main class="mdl-layout__content">
				<div class="grid mdl-grid">
				    <form>
				    	<div class="mdl-card__media">
							<img id="fotoPortada" alt="" src="images/portada.png">
						</div>
						  <input class="nombre" placeholder="Nombre" type="text"  value="" required>
						  <input class="email" placeholder="Dirección" type="email" value="" required>
						  <input class="localidad" placeholder="Localidad" type="text" value="" required>
						  <div class="flex">
						    <textarea placeholder="Mensaje" rows="1" required></textarea>
						  </div>
						  <button>Enviar</button>
					</form>
				</div>
				<?php include_once ("footer.php")?>	
    		</main>
    	</div>	
    </div>
  </body>
</html>
