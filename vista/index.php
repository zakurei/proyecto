<?php session_start()?>
<!doctype html>
<html lang="en">
<head>

<?php include_once ("head.php")  ?>

<title>Home</title>

</head>
<body id="index">
 
      
<div class="fondo">
	<div class="container container-local mdl-layout mdl-js-layout has-drawer is-upgraded">
      
			<?php include_once ("menu.php")  ?>
			<main class="mdl-layout__content">
		<div class="grid mdl-grid">

			<!-- Tops -->
			<div class="mdl-card tops mdl-cell mdl-cell--12-col">
				<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
					  <div class="mdl-tabs__tab-bar headerTops">
					      <a href="#starks-panel" class="mdl-tabs__tab is-active">Locales más comentados</a>
					      <a href="#lannisters-panel" class="mdl-tabs__tab">Usuarios más activos</a>
					      <a href="#targaryens-panel" class="mdl-tabs__tab">Locales más votados</a>
					  </div>
					
					  <div class="mdl-tabs__panel is-active" id="starks-panel">
							<ul class="mdl-list">
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Bryan
											Cranston</span> <span class="mdl-list__item-sub-title">62
											Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">message</i>
								</span></li>
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Aaron
											Paul</span> <span class="mdl-list__item-sub-title">62 Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">message</i>
								</span></li>
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Bob
											Odenkirk</span> <span class="mdl-list__item-sub-title">62
											Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">message</i>
								</span></li>
							</ul>
					  </div>
					  
					  
					  <div class="mdl-tabs__panel" id="lannisters-panel">
						     <ul class="mdl-list">
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Bryan
											Cranston</span> <span class="mdl-list__item-sub-title">62
											Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">star</i>
								</span></li>
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Aaron
											Paul</span> <span class="mdl-list__item-sub-title">62 Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">star</i>
								</span></li>
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Bob
											Odenkirk</span> <span class="mdl-list__item-sub-title">62
											Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">star</i>
								</span></li>
							</ul>
					  </div>
					  
					  
					  <div class="mdl-tabs__panel" id="targaryens-panel">
						   <ul class="mdl-list">
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Bryan
											Cranston</span> <span class="mdl-list__item-sub-title">62
											Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">favorite</i>
								</span></li>
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Aaron
											Paul</span> <span class="mdl-list__item-sub-title">62 Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">favorite</i>
								</span></li>
								<li class="mdl-list__item mdl-list__item--two-line"><span
									class="mdl-list__item-primary-content"> <i
										class="material-icons mdl-list__item-avatar">person</i> <span>Bob
											Odenkirk</span> <span class="mdl-list__item-sub-title">62
											Episodes</span>
								</span> <span class="mdl-list__item-secondary-content"> <i
											class="material-icons">favorite</i>
								</span></li>
							</ul>
					  </div>
				</div>
			</div>


				<!-- Sacar lista de mensajes -->
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
			<div class="fondoTexto">
				<div class="mdl-card__title mdl-color-text--grey-50 texto">
					<blockquote>
						<a href="local.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
						 Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
						  nascetur ridiculus mus. Donec qu</a>
					</blockquote>
				</div>
			</div>	
				<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
					<div>
						<img src="../images/usuarioAnonimo.jpg" class="avatarMsg">
					</div>
					<div class="autor">
						<strong>John Dufry</strong> <span>2 days ago</span>
					</div>
					<h3 style="margin-left:25%;">
						<a href="#">Stereo Bar</a>
					</h3>
				</div>
			</div>
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
			<div class="fondoTexto">
				<div class="mdl-card__title mdl-color-text--grey-50 texto">
					<blockquote>
						<a href="local.html">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
						 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						  Donec qu</a>
					</blockquote>
				</div>
			</div>	
				<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
					<div>
						<img src="../images/usuarioAnonimo.jpg" class="avatarMsg">
					</div>
					<div class="autor">
						<strong>John Dufry</strong> <span>2 days ago</span>
					</div>
					<h3 style="margin-left:25%;">
						<a href="#">Mambos</a>
					</h3>
				</div>
			</div>
		</div>
	
		
		
		<?php include_once ("footer.php")?>
		
		 </main>
	</div>
</div>
</body>
</html>