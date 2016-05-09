<?php session_start()?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description"
	content="A front-end template that helps you build fast, modern mobile web apps.">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<title>Jokers Club</title>

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="192x192"
	href="images/touch/chrome-touch-icon-192x192.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Material Design Lite">
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage"
	content="images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#3372DF">


<link
	href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en'
	rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.grey-orange.min.css">
    
<link rel="stylesheet" href="css/styles.css">
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
<body>
 
      
<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")  ?>
			
	
		<main class="mdl-layout__content">
		<div class="grid mdl-grid">
			<div class="mdl-card centro mdl-shadow--4dp mdl-cell mdl-cell--12-col">
				<div class="mdl-card__media mdl-color-text--grey-50" 
				style=" background-image: url('../images/road_big.jpg')">
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
		<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer__left-section">
				<ul class="mdl-mini-footer__link-list">
					<li><a href="#">Terminos legales</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</div>

			<div class="mdl-mini-footer__right-section">
				<div class="mdl-logo"><b>© 2016 Iván Sánchez Fernández all rights reserved</b></div>
			</div>
		</footer> </main>
		<div class="mdl-layout__obfuscator"></div>
	</div>
</div>
	<script src="../js/material.min.js"></script>
</body>
</html>