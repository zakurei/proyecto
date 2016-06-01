<?php 
session_start();
include_once ("../conexion/conexion.php");
include_once ("../logica/local.php");
$respuesta = votar();
?>
<!doctype html>
<html lang="en">
<head>
<?php  include_once ("head.php");?>
<title>Local</title>

</head>
<body id="local">
 
<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")?>	
	
		<main class="mdl-layout__content">
			<div class="grid mdl-grid">
				<div class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
					<div class="mdl-card__media mdl-color-text--grey-50">	
					<?php nombreTitulo();?>
					</div>
					
					<form method="post" class="voto" id="voto">
					<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
						<div class="meta__favorites favorito">
							<?php likes();?>
							<button type="submit" class="mdl-button btnLike" name="voto">
								 <i class="material-icons" role="presentation">favorite</i>
							</button>
						</div>
					</div>
					<?php echo $respuesta?>
					</form>
					
					<div class="mdl-color-text--grey-700 mdl-card__supporting-text infoLocal">
						  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
							  <div class="mdl-tabs__tab-bar">
							      <a href="#ofertas" class="mdl-tabs__tab is-active">Ofertas especiales</a>
							      <a href="#info" class="mdl-tabs__tab">Información</a>
							  </div>
						
						  <div class="mdl-tabs__panel is-active" id="ofertas">
								<ul class="mdl-list ofertas"><?php ofertas();?></ul>
						  </div>
						  
						  
						  <div class="mdl-tabs__panel" id="info">
							     <ul class="mdl-list info">
									<li class="mdl-list__item mdl-list__item--two-line"><?php info();?></li>
								</ul>
						  </div>
						  
						</div>
					</div>
					
					<?php include_once ("../logica/slider.php")  ?>
					<br/>
					<div class="mdl-color-text--primary-contrast mdl-card__supporting-text containerComents">
						<form method="post" class="mensaje">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<textarea rows=1 class="mdl-textfield__input" id="comentario" name="comentario" maxlength="200"></textarea>
								<label for="comentario" class="mdl-textfield__label">Escribe tu comentario</label>
							</div>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" name="enviar" id="enviar">
								<i class="material-icons" role="presentation">check</i><span
									class="visuallyhidden">Escribe un comentario</span>
							</button>
							
							<?php enviarComentario();?>
							
							<div class="comentarios mdl-color-text--grey-700">	
								<?php comentarios();?>
						</div>
					</div>
				</div>
			</div>
		
		<?php include_once ("footer.php")?>
		 </main>
	</div>
</div>
</body>
</html>