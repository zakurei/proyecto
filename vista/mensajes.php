<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>Mensajes</title>

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<link rel="icon" sizes="192x192" href="images/android-desktop.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Material Design Lite">
<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage"
	content="images/touch/ms-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#3372DF">



<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<link rel="stylesheet"
	href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet"
	href="https://code.getmdl.io/1.1.3/material.grey-orange.min.css">
<link rel="stylesheet" href="../css/styles.css">

<script src="js/material.min.js"></script>
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
	<div class="container mdl-layout mdl-js-layout has-drawer is-upgraded">
	<?php include_once ("menu.php")?>
		<main class="mdl-layout__content">
		<div class="grid mdl-grid">
		<!--  <div class="mdl-cell--1-col"></div>-->
		<!-- Top usuarios con más mensajes -->
			<div class="mdl-card tops mdl-cell mdl-cell--6-col">
				<ul class="mdl-list">
					<li class="mdl-list__item mdl-list__item--two-line"><span
						class="mdl-list__item-primary-content"> <i
							class="material-icons mdl-list__item-avatar">person</i> <span>Bryan
								Cranston</span> <span class="mdl-list__item-sub-title">62
								Episodes</span>
					</span> <span class="mdl-list__item-secondary-content"> <a
							class="mdl-list__item-secondary-action" href="#"><i
								class="material-icons">star</i></a>
					</span></li>
					<li class="mdl-list__item mdl-list__item--two-line"><span
						class="mdl-list__item-primary-content"> <i
							class="material-icons mdl-list__item-avatar">person</i> <span>Aaron
								Paul</span> <span class="mdl-list__item-sub-title">62 Episodes</span>
					</span> <span class="mdl-list__item-secondary-content"> <a
							class="mdl-list__item-secondary-action" href="#"><i
								class="material-icons">star</i></a>
					</span></li>
					<li class="mdl-list__item mdl-list__item--two-line"><span
						class="mdl-list__item-primary-content"> <i
							class="material-icons mdl-list__item-avatar">person</i> <span>Bob
								Odenkirk</span> <span class="mdl-list__item-sub-title">62
								Episodes</span>
					</span> <span class="mdl-list__item-secondary-content"> <a
							class="mdl-list__item-secondary-action" href="#"><i
								class="material-icons">star</i></a>
					</span></li>
				</ul>
			</div>

			<!-- Top locales más comentados -->
			<div class="mdl-card tops mdl-cell mdl-cell--6-col">
				<ul class="mdl-list">
					<li class="mdl-list__item mdl-list__item--two-line"><span
						class="mdl-list__item-primary-content"> <i
							class="material-icons mdl-list__item-avatar">person</i> <span>Bryan
								Cranston</span> <span class="mdl-list__item-sub-title">62
								Episodes</span>
					</span> <span class="mdl-list__item-secondary-content"> <a
							class="mdl-list__item-secondary-action" href="#"><i
								class="material-icons">star</i></a>
					</span></li>
					<li class="mdl-list__item mdl-list__item--two-line"><span
						class="mdl-list__item-primary-content"> <i
							class="material-icons mdl-list__item-avatar">person</i> <span>Aaron
								Paul</span> <span class="mdl-list__item-sub-title">62 Episodes</span>
					</span> <span class="mdl-list__item-secondary-content"> <a
							class="mdl-list__item-secondary-action" href="#"><i
								class="material-icons">star</i></a>
					</span></li>
					<li class="mdl-list__item mdl-list__item--two-line"><span
						class="mdl-list__item-primary-content"> <i
							class="material-icons mdl-list__item-avatar">person</i> <span>Bob
								Odenkirk</span> <span class="mdl-list__item-sub-title">62
								Episodes</span>
					</span> <span class="mdl-list__item-secondary-content"> <a
							class="mdl-list__item-secondary-action" href="#"><i
								class="material-icons">star</i></a>
					</span></li>
				</ul>
			</div>
<!--  <div class="mdl-cell--1-col"></div>-->


				<!-- Sacar lista de mensajes -->
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
				<div class="mdl-card__supporting-text msgHeader">
					<h3 style="margin: 0 auto;">
						<a href="#">Stereo Bar</a>
					</h3>
				</div>
				<div class="mdl-card__title mdl-color-text--grey-50">
					<blockquote>
						<a href="local.html">I couldn’t take any pictures but this was
							an amazing thing…</a>
					</blockquote>
				</div>
				<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
					<div>
						<img src="../images/usuarioAnonimo.jpg" class="avatarMsg">
					</div>
					<div class="autor">
						<strong>John Dufry</strong> <span>2 days ago</span>
					</div>
				</div>
			</div>
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
				<div class="mdl-card__supporting-text msgHeader">
					<h3 style="margin: 0 auto;">
						<a href="#">Mambos</a>
					</h3>
				</div>
				<div class="mdl-card__title mdl-color-text--grey-50">
					<blockquote>
						<a href="local.html">I couldn’t take any pictures but this was
							an amazing thing…</a>
					</blockquote>
				</div>
				<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
					<div>
						<img src="../images/usuarioAnonimo.jpg" class="avatarMsg">
					</div>
					<div class="autor">
						<strong>John Dufry</strong> <span>2 days ago</span>
					</div>
				</div>
			</div>
		</div>
		<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer__left-section">
				<ul class="mdl-mini-footer__link-list">
					<li><a href="#">Terminos legales</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</div>

			<div class="mdl-mini-footer__right-section">
				<div class="mdl-logo"><b>© 2011 Iván Sánchez Fernández all rights
					reserved</b></div>
			</div>
		</footer> </main>
		<div class="mdl-layout__obfuscator"></div>
	</div>
</div>
</body>
</html>