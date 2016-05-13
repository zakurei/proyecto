<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
<?php include_once ("head.php")  ?>

<title>Local</title>

</head>
<body id="local">
 
<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")  ?>	
	
		<main class="mdl-layout__content">
			<div class="grid mdl-grid">
				<div class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
					<div class="mdl-card__media mdl-color-text--grey-50">
					
					
						<img id="fotoLocal" alt="" src="images/dreams.jpg">
							<h3><b id="tituloLocal">Jokers Club</b></h3>
					</div>
					
					<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
						<div class="meta__favorites favorito">
							425 <i class="material-icons" role="presentation">favorite</i>
						</div>
					</div>
					
					<div class="mdl-color-text--grey-700 mdl-card__supporting-text infoLocal">
						  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
							  <div class="mdl-tabs__tab-bar">
							      <a href="#ofertas" class="mdl-tabs__tab is-active">Ofertas especiales</a>
							      <a href="#info" class="mdl-tabs__tab">Información</a>
							  </div>
						
						  <div class="mdl-tabs__panel is-active" id="ofertas">
								<ul class="mdl-list ofertas">
									<li class="mdl-list__item mdl-list__item--two-line"><span
										class="mdl-list__item-primary-content"> <i
											class="material-icons mdl-list__item-avatar">my_location</i> <span>Bryan
												Cranston</span>
									</span> <span class="mdl-list__item-secondary-content"> 
									€
									</span></li>
									<li class="mdl-list__item mdl-list__item--two-line"><span
										class="mdl-list__item-primary-content"> <i
											class="material-icons mdl-list__item-avatar">my_location</i> <span>Aaron
												Paul</span>
									</span> <span class="mdl-list__item-secondary-content"> 
									
									€
									</span></li>
								</ul>
						  </div>
						  
						  
						  <div class="mdl-tabs__panel" id="info">
							     <ul class="mdl-list info">
									<li class="mdl-list__item mdl-list__item--two-line"><span
										class="mdl-list__item-primary-content"> hjvfghsfg st
										ert et er  te e  eet  ee   ertertertreretr e terter e te et e e 
										etertert e ertet  t er  r etdgdtdrt     e e jghh</li>
								</ul>
						  </div>
						  
						</div>
					</div>
					
					<?php include_once ("slider.php")  ?>
					<br/>
					<div class="mdl-color-text--primary-contrast mdl-card__supporting-text containerComents">
						<form method="post" action="local.php?id=jokers" class="mensaje">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<textarea rows=1 class="mdl-textfield__input" id="comentario"></textarea>
								<label for="comentario" class="mdl-textfield__label">Escribe tu comentario</label>
							</div>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
								<i class="material-icons" role="presentation">check</i><span
									class="visuallyhidden">Escribe un comentario</span>
							</button>
						</form>
						<?php
							if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true){
							}else {
								echo'
						  	<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso" href="registro.php">Para escribir mensajes debes estar registrado</a>
								
								';
							}
							?>
						<div class="comentarios mdl-color-text--grey-700">
							<header class="headerComent">
								<img src="../images/usuarioAnonimo.jpg" class="avatarMsg">
								<div class="autor">
									<strong>James Splayd</strong> <span>2 days ago</span>
								</div>
							</header>
							<div class="textoComent">In in culpa nulla elit esse. Ex
								cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat
								ad minim officia mollit laborum magna dolor tempor cupidatat
								mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore
								proident incididunt in labore elit.</div>
	
							<hr><hr>
							<header class="headerComent">
								<img src="../images/usuarioAnonimo.jpg" class="avatarMsg">
								<div class="autor">
									<strong>John Dufry</strong> <span>2 days ago</span>
								</div>
							</header>
							<div class="textoComent">In in culpa nulla elit esse. Ex
								cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat
								ad minim officia mollit laborum magna dolor tempor cupidatat
								mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore
								proident incididunt in labore elit.</div>
						</div>
					</div>
				</div>
			</div>
		
		<?php include_once ("footer.php")?>
		 </main>
	</div>
</div>
	<script src="js/material.min.js"></script>
</body>
</html>