<!doctype html>
<html lang="en">
<head>

<?php include_once ("head.php")?>

<title>Mensajes</title>

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
<body id="mensajes">
<div class="fondo">
	<div class="container mdl-layout mdl-js-layout has-drawer is-upgraded">
	<?php include_once ("menu.php")?>
	
		<main class="mdl-layout__content">
		<div class="grid mdl-grid">
		
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
		
		<?php include_once ("footer.php")?>
		
		 </main>
		<div class="mdl-layout__obfuscator"></div>
	</div>
</div>
</body>
</html>