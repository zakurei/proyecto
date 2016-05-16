<!doctype html>
<html lang="en">
<head>
<?php
include_once ("head.php");
include_once ("../controladores/conexion.php");
?>

<title>Mensajes</title>
</head>
<body id="mensajes">
<div class="fondo">
	<div class="container mdl-layout mdl-js-layout has-drawer is-upgraded">
	<?php include_once ("menu.php")?>
	
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
									class="mdl-list__item-primary-content"> 
								<img src="images/usuarios/road.jpg" class="avatarMsg"> 
									
<!-- 									<img src='.''.'images/usuarios/'.$imagenUsuario.''.' class="avatarMsg"> -->
									 <span>Bryan
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
				<?php 				
				$conexion = new conexion();
				$conn = $conexion->conectar();

				$sql = "SELECT l.nombre as loc_nombre, u.nombre as us_nombre, u.avatar, c.comentario
							FROM usuarios u
							JOIN comentarios c ON u.id = c.id_usuarios
							JOIN locales l ON c.id_locales = l.id";
				
				$cons = $conexion->ejecutar_consulta($sql);
				
				while ($row = mysqli_fetch_object($cons)){
					$nombreUsuario = $row-> us_nombre;
					$imagenUsuario = $row->avatar;
					$comentario = $row->comentario;
					$nombre = $row->loc_nombre;
					$nombreLink= str_replace(' ', '_', $nombre);
					
				echo '
			<div class="mdl-card mensaje mdl-cell mdl-cell--12-col">
			<div class="fondoTexto">
				<div class="mdl-card__title mdl-color-text--grey-50 texto">
					<blockquote>
						<a href="local.php?id='.$nombreLink.'">'.$comentario.'</a>
					</blockquote>
				</div>
			</div>	
				<div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
					<div>
						<img src='.''.'images/usuarios/'.$imagenUsuario.''.' class="avatarMsg">
					</div>
					<div class="autor">
						<strong>'.$nombreUsuario.'</strong> <span>2 days ago</span>
					</div>
												<div class="mdl-card__actions btnMensajes">
								<a id="localGaleria" class="mdl-button mdl-js-button mdl-js-ripple-effect btnAviso" href="local.php?id='.$nombreLink.'">
									'.$nombre.'
								</a>
							</div>
												
				</div>
			</div>
					';
				}
			?>
	
		</div>
		<?php include_once ("footer.php")?>
		 </main>
	</div>
</div>
</body>
</html>