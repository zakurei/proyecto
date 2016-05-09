<?php session_start()?>
<!doctype html>

<html lang="en">
<head>


<?php include_once ("head.php")  ?>

<title>Jokers Club</title>

<style>
#view-source {
	position: fixed;
	display: block;
	right: 0;
	bottom: 0;
	margin-right: 40px;
	margin-bottom: 40px;
	z-index: 900;
}
</style>
</head>
<body id="local">
 
      
<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")  ?>
			
	
		<main class="mdl-layout__content">
		<div class="grid mdl-grid">
			<div class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
				<div class="mdl-card__media mdl-color-text--grey-50">
				<img id="fotoLocal" alt="" src="../images/alex.jpg">
					<h3><b id="tituloLocal">Jokers Club</b></h3>
				</div>
				<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
					<div class="meta__favorites favorito">
						425 <i class="material-icons" role="presentation">favorite</i>
					</div>
				</div>
				<div class="mdl-color-text--grey-700 mdl-card__supporting-text">
					<p>Excepteur reprehenderit sint exercitation ipsum consequat
						qui sit id velit elit. Velit anim eiusmod labore sit amet.
						Voluptate voluptate irure occaecat deserunt incididunt esse in.
						Sunt velit aliquip sunt elit ex nulla reprehenderit qui ut eiusmod
						ipsum do. Duis veniam reprehenderit laborum occaecat id proident
						nulla veniam. Duis enim deserunt voluptate aute veniam sint
						pariatur exercitation.</p>
					<p>Qui ullamco consectetur aute fugiat officia ullamco proident
						Lorem ad irure. Sint eu ut consectetur ut esse veniam laboris
						adipisicing aliquip minim anim labore commodo. Incididunt eu enim
						enim ipsum Lorem commodo tempor duis eu ullamco tempor elit
						occaecat sit. Culpa eu sit voluptate ullamco ad irure. Anim
						commodo aliquip cillum ea nostrud commodo id culpa eu irure ut
						proident.</p>
				</div>
				<div class="mdl-color-text--primary-contrast mdl-card__supporting-text containerComents">
					<form>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<textarea rows=1 class="mdl-textfield__input" id="comentario"></textarea>
							<label for="comentario" class="mdl-textfield__label">Escribe tu comentario</label>
						</div>
						<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
							<i class="material-icons" role="presentation">check</i><span
								class="visuallyhidden">Escribe un comentario</span>
						</button>
					</form>
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
		<div class="mdl-layout__obfuscator"></div>
	</div>
</div>
	<script src="../js/material.min.js"></script>
</body>
</html>